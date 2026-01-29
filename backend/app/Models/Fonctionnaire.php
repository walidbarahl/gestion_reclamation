<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Fonctionnaire extends Model
{
    public function reclamations()
{
    return $this->hasMany(Reclamation::class);
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

}
