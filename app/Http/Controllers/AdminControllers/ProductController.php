<?php


namespace App\Http\Controllers;

namespace App\Http\Controllers\AdminControllers;

use App\Models\Produit;
use App\Models\Societe;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    public function index()
    {
        //$produits = Produit::all();
        $produits = Produit::with('clients', 'societes')->get();
        $societes = Societe::all();
        return view('admin.products', compact('produits', 'societes'));
    }
    public function Add_Produit(Request $request)
    {
        // Validation (customize this according to your needs)
        $validatedData = $request->validate([
            'name' => 'required|string',
            'code' => 'required|string',
            'photos' => 'required|string',
            'id_societe' => 'required|numeric',
            'descriptive' => 'required|string',
            'prix' => 'required|numeric',
        ]);

        // Create the product
        Produit::create($validatedData);

        // Redirect or perform any additional actions
        return redirect()->route('Admin-Produit')->with('success', 'Product added successfully.');
    }
    public function Delete_Produit(Request $request)
    {
        $produitId = $request->input('id');

        // Vérifier si le produit existe
        $produit = Produit::find($produitId);

        if (!$produit) {
            // Le produit n'existe pas
            return redirect()->back()->with('error', 'Produit non trouvé');
        }

        // Supprimer le produit
        $produit->delete();

        // Rediriger avec un message de succès
        return redirect()->back()->with('success', 'Produit supprimé avec succès');
    }
}
