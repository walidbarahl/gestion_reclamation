<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Reclamation;
use App\Models\Service;
use Illuminate\Http\Request;
use App\Models\ReclamationHistory;
use Illuminate\Support\Facades\Auth;


class AssignmentController extends Controller
{
    /**
     * Assign or reassign a reclamation
     */
    public function assign(Request $request, Reclamation $reclamation)
    {
        $data = $request->validate([
            'service_id' => ['required', 'exists:services,id'],
            'fonctionnaire_id' => ['nullable', 'exists:fonctionnaires,id'],
            'commentaire' => ['nullable', 'string'],
        ]);

        // Update assignment
        $reclamation->update([
            'service_id' => $data['service_id'],
            'fonctionnaire_id' => $data['fonctionnaire_id'] ?? null,
            'statut' => 'en_cours',
            'commentaire' => $data['commentaire'] ?? null,
        ]);

        // record assignment history

        ReclamationHistory::create([
            'reclamation_id' => $reclamation->id,
            'user_id' => Auth::id(), // responsable
            'action' => 'affectee',
            'commentaire' => 'Assignée au service ' . $reclamation->service_id,
        ]);

        return response()->json([
            'message' => 'Réclamation assignée avec succès',
            'reclamation' => $reclamation,
        ]);
    }
}
