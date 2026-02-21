<?php

namespace App\Http\Controllers\Api\Fonctionnaire;

use App\Http\Controllers\Controller;
use App\Models\Reclamation;
use Illuminate\Http\Request;
use App\Models\ReclamationHistory;
use Illuminate\Support\Facades\Auth;
use App\Services\ReclamationService;



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

    $reclamation = ReclamationService::traiter(
        $reclamation,
        $request->commentaire
    );

    return response()->json([
        'message' => 'Réclamation traitée avec succès',
        'reclamation' => $reclamation,
    ]);
}

public function return(Request $request, Reclamation $reclamation)
{
    $request->validate([
        'commentaire' => 'required|string',
    ]);

    $reclamation = ReclamationService::retourner(
        $reclamation,
        $request->commentaire
    );

    return response()->json([
        'message' => 'Réclamation retournée au responsable',
        'reclamation' => $reclamation,
    ]);
}

}
