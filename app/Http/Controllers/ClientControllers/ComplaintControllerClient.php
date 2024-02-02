<?php

namespace App\Http\Controllers\Client;

namespace App\Http\Controllers\ClientControllers;

use App\Http\Controllers\Controller;
use App\Models\Commentaire;
use Illuminate\Http\Request;

class ComplaintControllerClient extends Controller
{
    public function index()
    {
        $complaints = Commentaire::with('produit', 'utilisateur')->get(); 
        $complaints = Commentaire::all();
        // Utilisez le modèle CommentModel pour récupérer les commentaires avec les relations
        //$comments = Commentaire::with('client','produit')->get();
        // Affichez les informations nécessaires dans la vue ou effectuez d'autres opérations
        return view('client.complaint', compact('complaints'));
    }
}
