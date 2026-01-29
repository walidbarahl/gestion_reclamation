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

}
