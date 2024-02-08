<?php

namespace App\Http\Controllers\Client;
namespace App\Http\Controllers\ClientControllers;

use App\Http\Controllers\Controller;
use App\Models\Produit;
use Illuminate\Http\Request;

class ProductAnomalyControllerClient extends Controller
{
    //
    public function index()
    {
        $produits = Produit::all();
        return view('client.product', compact("produits"));
    }
}
