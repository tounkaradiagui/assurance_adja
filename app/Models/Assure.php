<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Assure extends Model
{
    use HasFactory;
    protected $fillable = ['nom', 'prenom', 'adresse', 'telephone', 'fonction'];

    public function vehicule(){
        return $this->hasMany(Vehicule::class, 'id_assure');
    }

    public function paiement(){
        return $this->hasMany(Paiement::class, 'id_assure');
    }
}
