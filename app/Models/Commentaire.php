<?php

// app/Models/Commentaire.php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Commentaire extends Model
{
    protected $fillable = [
        'id_produit',
        'id_utilisateur',
        'texte_commentaire',
        'statut',
        // Add other fillable attributes as needed
    ];

    // Add relationships if needed
    public function produit()
    {
        return $this->belongsTo(Produit::class, 'id_produit');
    }

    public function utilisateur()
    {
        return $this->belongsTo(Client::class, 'id_utilisateur');
    }

    // Add other relationships as needed
}
