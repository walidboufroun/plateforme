<?php

// app/Models/Alert.php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Alert extends Model
{
    protected $fillable = [
        'name',
        'date',
        'id_produit',
        'seen',
        'description',
        'id_client',
        // Add other fillable attributes as needed
    ];

    // Add relationships if needed
    public function produit()
    {
        return $this->belongsTo(Produit::class, 'id_produit');
    }

    public function client()
    {
        return $this->belongsTo(Client::class, 'id_client');
    }

    // Add other relationships as needed
}
