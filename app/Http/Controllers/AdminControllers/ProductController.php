<?php


namespace App\Http\Controllers;
namespace App\Http\Controllers\AdminControllers;

use App\Models\Produit;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    public function index()
    {
        //$produits = Produit::all();
        $produits = Produit::with('clients', 'societes')->get();
        return view('admin.products' ,compact('produits'));
    }
    public function Add_client(Request $request)
    {
        // Validation (customize this according to your needs)
        $validatedData = $request->validate([
            'name' => 'required|string',
            'code' => 'required|string',
            'photos' => 'required|string',
            'descriptive' => 'required|string',
            'prix' => 'required|numeric',
        ]);

        // Create the product
        Produit::create($validatedData);

        // Redirect or perform any additional actions
        return redirect()->route('products.index')->with('success', 'Product added successfully.');
    }
}
