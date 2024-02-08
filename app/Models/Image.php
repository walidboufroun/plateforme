<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $fillable = [
        'id_produit',
        'name',
        // Ajoutez d'autres champs fillable au besoin
    ];

    // Relation avec le modèle de produit (si nécessaire)
    public function produit()
    {
        return $this->belongsTo(Produit::class, 'id_produit');
    }
}
