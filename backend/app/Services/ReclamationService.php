<?php

namespace App\Services;

use App\Models\Reclamation;
use App\Models\ReclamationHistory;
use Illuminate\Support\Facades\Auth;

class ReclamationService
{
    /**
     * Assign or reassign a reclamation (Responsable)
     */
    public static function assign(
        Reclamation $reclamation,
        int $serviceId,
        ?int $fonctionnaireId = null,
        ?string $commentaire = null
    ): Reclamation {

        $reclamation->update([
            'service_id' => $serviceId,
            'fonctionnaire_id' => $fonctionnaireId,
            'statut' => 'en_cours',
            'commentaire' => $commentaire,
        ]);

        self::history(
            $reclamation,
            'affectee',
            $commentaire ?? "Affectée au service ID {$serviceId}"
        );

        return $reclamation;
    }

    /**
     * Fonctionnaire traite la réclamation
     */
    public static function traiter(
        Reclamation $reclamation,
        string $commentaire
    ): Reclamation {

        $reclamation->update([
            'statut' => 'traitee',
            'commentaire' => $commentaire,
        ]);

        self::history(
            $reclamation,
            'traitee',
            $commentaire
        );

        return $reclamation;
    }

    /**
     * Fonctionnaire retourne la réclamation
     */
    public static function retourner(
        Reclamation $reclamation,
        string $commentaire
    ): Reclamation {

        $reclamation->update([
            'statut' => 'retournee',
            'commentaire' => $commentaire,
        ]);

        self::history(
            $reclamation,
            'retournee',
            $commentaire
        );

        return $reclamation;
    }

    /**
     * Centralized history writer
     */
    private static function history(
        Reclamation $reclamation,
        string $action,
        ?string $commentaire = null
    ): void {

        ReclamationHistory::create([
            'reclamation_id' => $reclamation->id,
            'user_id' => Auth::id(),
            'action' => $action,
            'commentaire' => $commentaire,
        ]);
    }
}
