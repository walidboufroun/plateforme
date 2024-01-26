<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

// app/Models/Commande.php
class Commande extends Model
{
    protected $fillable = [
        'date_commande',
        'id_client',
        'id_societe',
        'id_produit',
        'nombre_produit',
        'statut',
    ];

    public function client()
    {
        return $this->belongsTo(Client::class, 'id_client');
    }

    public function produit()
    {
        return $this->belongsTo(Produit::class, 'id_produit');
    }
}
