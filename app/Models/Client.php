<?php

// app/Models/Client.php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Auth\Authenticatable as AuthenticatableTrait;


class Client extends Model implements Authenticatable
{
    use AuthenticatableTrait;
    
    protected $fillable = [
        'username',
        'password',
        'email',
        'name',
        'photo',
        'adresse',
        'phone_number',
        'type',
        'id_societe',
        // Add other fillable attributes as needed
    ];

    // Add relationships if needed
    public function societe()
    {
        return $this->belongsTo(Societe::class, 'id_societe');
    }

    public function commentaires()
    {
        return $this->hasMany(Commentaire::class, 'id_utilisateur');
    }

    // Add other relationships as needed
}
