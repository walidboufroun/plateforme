<?php

// app/Models/Societe.php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Societe extends Model
{
    protected $fillable = [
        'name',
        'site_web',
        'adresse',
        'phone_number',
        'logo',
        'type',
        'registre_commerce',
        'description',
        // Add other fillable attributes as needed
    ];
    public function societes()
    {
        return $this->hasMany(Societe::class, 'id_societe');
    }
    public function clients()
    {
        return $this->belongsTo(Commande::class, 'id_societe');
    }
    // You can add mutators, accessors, and relationships as needed
}
