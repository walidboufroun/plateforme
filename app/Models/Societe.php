<?php

// app/Models/Societe.php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Societe extends Model
{
    protected $fillable = [
        'nom_societe',
        'site_web',
        'adresse',
        'phone_number',
        'logo',
        'type_societe',
        'registre_commerce',
        'description',
        // Add other fillable attributes as needed
    ];

    // You can add mutators, accessors, and relationships as needed
}
