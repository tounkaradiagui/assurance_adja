<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehicule extends Model
{
    use HasFactory;
    protected $fillable = ['immatriculation', 'marque', 'modele', 'couleur', 'carburant', 'type', 'id_assure'];

    public function assure(){
        return $this->belongsTo(Assure::class, 'id_assure');
    }
}
