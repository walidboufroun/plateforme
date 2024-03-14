<?php

namespace App\Http\Controllers\Client;

namespace App\Http\Controllers\ClientControllers;

use App\Http\Controllers\Controller;
use App\Models\Produit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProductAnomalyControllerClient extends Controller
{
    //
    public function index()
    {
        //$produits = Produit::all();
        $authenticatedClientId = Auth::guard('clients')->user()->id_societe;

        $produits = Produit::where('id_societe', $authenticatedClientId)->get();

        return view('client.product', compact("produits"));
    }
}
