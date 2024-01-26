<?php

// app/Models/Produit.php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Produit extends Model
{
    protected $fillable = [
        'nom_produit',
        'photos',
        'descriptive',
        'prix',
        // Add other fillable attributes as needed
    ];

    // Add relationships if needed
    public function commentaires()
    {
        return $this->hasMany(Commentaire::class, 'id_produit');
    }

    public function forfait()
    {
        return $this->hasOne(Forfait::class, 'id_produit');
    }

    // Add other relationships as needed
}
