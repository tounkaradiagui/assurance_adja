<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paiement extends Model
{
    use HasFactory;

    protected $fillable = ['montant', 'date', 'id_assure'];

    public function assure(){
        return $this->belongsTo(Assure::class, 'id_assure');
    }
}
