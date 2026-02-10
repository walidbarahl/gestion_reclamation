<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ReclamationHistory extends Model
{
        protected $fillable = [
        'reclamation_id',
        'user_id',
        'action',
        'commentaire',
    ];
        public function reclamation()
    {
        return $this->belongsTo(Reclamation::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
