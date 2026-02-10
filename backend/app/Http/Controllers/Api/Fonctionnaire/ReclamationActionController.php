<?php

namespace App\Http\Controllers\Api\Fonctionnaire;

use App\Http\Controllers\Controller;
use App\Models\Reclamation;
use Illuminate\Http\Request;
use App\Models\ReclamationHistory;
use Illuminate\Support\Facades\Auth;


class ReclamationActionController extends Controller
{
    /**
     * Fonctionnaire reponds et traites la reclamation
     */
    public function reply(Request $request, Reclamation $reclamation)
    {
        $request->validate([
            'commentaire' => 'required|string',
        ]);

        $reclamation->update([
            'statut' => 'traitee',
            'commentaire' => $request->commentaire,
        ]);

        ReclamationHistory::create([
            'reclamation_id' => $reclamation->id,
            'user_id' => Auth::id(),
            'action' => 'en_cours',
            'commentaire' => 'Traitement démarré',
        ]);

        return response()->json([
            'message' => 'Réclamation traitée avec succès',
            'reclamation' => $reclamation,
        ]);
    }


    /**
     * Fonctionnaire returns the reclamation
     */
    public function return(Request $request, Reclamation $reclamation)
    {
        $request->validate([
            'commentaire' => 'required|string',
        ]);

        $reclamation->update([
            'statut' => 'retournee',
            'commentaire' => $request->commentaire,
        ]);

        ReclamationHistory::create([
            'reclamation_id' => $reclamation->id,
            'user_id' => Auth::id(),
            'action' => 'retournee',
            'commentaire' => $request->commentaire,
        ]);


        return response()->json([
            'message' => 'Réclamation retournée au responsable',
            'reclamation' => $reclamation,
        ]);
    }
}
