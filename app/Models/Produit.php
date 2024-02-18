<?php

// app/Models/Produit.php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Produit extends Model
{
    protected $fillable = [
        'name',
        'code',
        'photos',
        'id_client',
        'id_societe',
        'descriptive',
        'prix',
        // Add other fillable attributes as needed
    ];

    // Add relationships if needed
    public function clients()
    {
        return $this->belongsTo(Client::class, 'id_client');
    }
    public function societes()
    {
        return $this->belongsTo(Societe::class, 'id_societe');
    }

    public function commentaires()
    {
        return $this->hasMany(Commentaire::class, 'id_produit');
    }

    public function forfait()
    {
        return $this->hasMany(Forfait::class, 'id_produit');
    }

    public function images()
    {
        return $this->hasMany(Image::class, 'id_produit');
    }

    // Add other relationships as needed
}
