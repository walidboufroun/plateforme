<?php

// app/Models/Etat.php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Etat extends Model
{
    protected $fillable = [
        'state_glass',
        'state_plastic',
        'state_metal',
        'state_paper',
        'state_other',
        'gps',
        'detecteur_de_feu',
        'detecteur_de_mouvement',
        'it_produit',
        // Add other fillable attributes as needed
    ];

    // You can add mutators, accessors, and relationships as needed
}
