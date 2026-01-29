<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
public function fonctionnaires()
{
    return $this->hasMany(Fonctionnaire::class);
}

public function reclamations()
{
    return $this->hasMany(Reclamation::class);
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