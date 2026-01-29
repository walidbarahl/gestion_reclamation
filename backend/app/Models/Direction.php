<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Direction extends Model
{
    //
    public function divisions()
{
    return $this->hasMany(Division::class);
}

public function services()
{
    return $this->hasMany(Service::class);
}
}
