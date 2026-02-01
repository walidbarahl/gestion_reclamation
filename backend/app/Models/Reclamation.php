<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Reclamation extends Model
{
    protected $fillable = [
    'objet',
    'description',
    'statut',
    'commentaire',

    'citoyen_id',
    'direction_id',
    'division_id',
    'service_id',
    'fonctionnaire_id',
];
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
