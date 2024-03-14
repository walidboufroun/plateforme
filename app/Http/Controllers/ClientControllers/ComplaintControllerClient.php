<?php

namespace App\Http\Controllers\Client;

namespace App\Http\Controllers\ClientControllers;

use App\Http\Controllers\Controller;
use App\Models\Commentaire;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ComplaintControllerClient extends Controller
{
    public function index()
    {
        /*
        $complaints = Commentaire::with('produit', 'utilisateur')->get();
        $complaints = Commentaire::all();
        $complaints = Commentaire::all();
        
        $idSociete = Auth::guard('clients')->user()->id_societe;

        if ($idSociete !== 0) {
            $complaints = Commentaire::where('id_produit', $idSociete)->get();
        } else {
            $complaints = collect(); // Empty collection if id_societe is 0
        }
*/
        $complaints = Commentaire::whereHas('produit', function ($query) {
            $query->where('id_societe', Auth::guard('clients')->user()->id_societe);
        })->get();
        

        return view('client.complaint', compact('complaints'));
    }
}
