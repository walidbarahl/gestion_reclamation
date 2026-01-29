<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Reclamation extends Model
{
    public function citoyen()
{
    return $this->belongsTo(Citoyen::class);
}

public function fonctionnaire()
{
    return $this->belongsTo(Fonctionnaire::class);
}

public function service()
{
    return $this->belongsTo(Service::class);
}

public function division()
{
    return $this->belongsTo(Division::class);
}

public function direction()
{
    return $this->belongsTo(Direction::class);
}

public function piecesJointes()
{
    return $this->hasMany(PieceJointe::class);
}

}
