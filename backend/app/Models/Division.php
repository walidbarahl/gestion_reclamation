<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Division extends Model
{
    //
    public function direction()
{
    return $this->belongsTo(Direction::class);
}

public function services()
{
    return $this->hasMany(Service::class);
}
}
