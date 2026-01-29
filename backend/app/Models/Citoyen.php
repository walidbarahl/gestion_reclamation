<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Citoyen extends Model
{
    //
    public function reclamations()
{
    return $this->hasMany(Reclamation::class);
}

}
