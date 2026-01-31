<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Division;
use Illuminate\Http\Request;

class DivisionController extends Controller
{
        public function byDirection($directionId)
    {
        return response()->json(
            Division::where('direction_id', $directionId)
                ->select('id', 'libelle')
                ->get()
        );
    }
}
