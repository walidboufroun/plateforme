<?php

// app/Models/Alert.php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Alert extends Model
{
    protected $fillable = [
        'nom_alerte',
        'date_et_heure',
        'id_produit',
        'lu',
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
