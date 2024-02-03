<?php

// app/Models/Forfait.php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Forfait extends Model
{
    protected $fillable = [
        'name',
        'duration',
        'description',
        'photos',
        'id_produit',
        // Add other fillable attributes as needed
    ];

    // Add relationships if needed
    public function produit()
    {
        return $this->belongsTo(Produit::class, 'id_produit');
    }

    // Add other relationships as needed
}
