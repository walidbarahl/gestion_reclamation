<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Citoyen;
use App\Models\Reclamation;
use Illuminate\Http\Request;

class ReclamationController extends Controller
{

public function store(Request $request)
{
    $request->validate([
        'cin' => 'required',
        'nom' => 'required',
        'telephone' => 'required',
        'email' => 'nullable|email',

        'objet' => 'required',
        'description' => 'required',

        'direction_id' => 'nullable|exists:directions,id',
        'division_id' => 'nullable|exists:divisions,id',
        'service_id' => 'nullable|exists:services,id',
        'fonctionnaire_id' => 'nullable|exists:fonctionnaires,id',
    ]);

    // Find or create citizen
    $citoyen = Citoyen::firstOrCreate(
        ['cin' => $request->cin],
        [
            'nom' => $request->nom,
            'telephone' => $request->telephone,
            'email' => $request->email,
        ]
    );

    // Create reclamation
    $reclamation = Reclamation::create([
        'objet' => $request->objet,
        'description' => $request->description,
        'citoyen_id' => $citoyen->id,
        'direction_id' => $request->direction_id,
        'division_id' => $request->division_id,
        'service_id' => $request->service_id,
        'fonctionnaire_id' => $request->fonctionnaire_id,
    ]);

    return response()->json($reclamation, 201);
}

public function updateStatus(Request $request, Reclamation $reclamation)
{
    $request->validate([
        'statut' => 'required|in:en_cours,traitee,retournee',
        'commentaire' => 'nullable|string',
    ]);

    $reclamation->update([
        'statut' => $request->statut,
        'commentaire' => $request->commentaire,
        'fonctionnaire_id' => $request->user()->fonctionnaire_id,
    ]);

    return response()->json([
        'message' => 'Statut mis à jour',
        'reclamation' => $reclamation,
    ]);
}

public function reassign(Request $request, Reclamation $reclamation)
{
    $request->validate([
        'service_id' => 'required|exists:services,id',
    ]);

    $reclamation->update([
        'service_id' => $request->service_id,
        'statut' => 'en_cours',
        'commentaire' => null,
        'fonctionnaire_id' => null,
    ]);

    return response()->json([
        'message' => 'Réclamation réaffectée',
        'reclamation' => $reclamation,
    ]);
}

}