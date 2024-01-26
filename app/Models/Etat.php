<?php

// app/Models/Etat.php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Etat extends Model
{
    protected $fillable = [
        'etat_glass',
        'etat_plastic',
        'etat_metal',
        'etat_paper',
        'etat_other',
        'gps',
        'detecteur_de_feu',
        'detecteur_de_mouvement',
        'it_produit',
        // Add other fillable attributes as needed
    ];

    // You can add mutators, accessors, and relationships as needed
}
