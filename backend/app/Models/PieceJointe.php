<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PieceJointe extends Model
{
    //
    public function reclamation()
{
    return $this->belongsTo(Reclamation::class);
}

}
