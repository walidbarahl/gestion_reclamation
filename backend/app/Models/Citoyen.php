<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Citoyen extends Model
{
    //
        protected $fillable = [
        'cin',
        'nom',
        'prenom',
        'telephone',
        'email',
    ];
    public function reclamations()
{
    return $this->hasMany(Reclamation::class);
}

}
