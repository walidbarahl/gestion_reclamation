<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Direction;
use Illuminate\Http\Request;


class DirectionController extends Controller
{
        public function index()
    {
        return response()->json(
            Direction::select('id', 'libelle')->get()
        );
    }
}
