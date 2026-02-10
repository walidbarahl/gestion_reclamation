<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Reclamation;
use Illuminate\Http\Request;

class ReclamationHistoryController extends Controller
{
    public function index(Reclamation $reclamation)
    {
        $history = $reclamation->histories()
            ->with('user:id,name,role')
            ->orderBy('created_at', 'asc')
            ->get()
            ->map(function ($item) {
                return [
                    'action' => $item->action,
                    'commentaire' => $item->commentaire,
                    'auteur' => $item->user?->name,
                    'role' => $item->user?->role,
                    'date' => $item->created_at->format('Y-m-d H:i'),
                ];
            });

        return response()->json($history);
    }
}
