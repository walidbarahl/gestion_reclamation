<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Reclamation;
use App\Models\Service;
use Illuminate\Http\Request;

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

        return response()->json([
            'message' => 'Réclamation assignée avec succès',
            'reclamation' => $reclamation,
        ]);
    }
}
