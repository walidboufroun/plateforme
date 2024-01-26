<?php


namespace App\Http\Controllers;
namespace App\Http\Controllers\AdminControllers;

use App\Http\Controllers\Controller;
use App\Models\Produit;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $produits = Produit::all();
        return view('admin.products' ,compact('produits'));
    }
}
