<?php


namespace App\Http\Controllers;

namespace App\Http\Controllers\AdminControllers;

use App\Http\Controllers\Controller;
use App\Models\Client;
use App\Models\Commande;
use App\Models\Produit;
use App\Models\Societe;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index()
    {
        //liste des produits 
        $produits = Produit::all();
        // Récupérez toutes les sociétés
        $societes = Societe::all();
        // Récupérez tous les clients qui n'ont pas d'id_societe
        $clientsWithoutSociete = Client::whereNull('id_societe')->get();
        //$commandes = Commande::all();
        $commandes = Commande::with('client.societe')->get();
        //dd($commandes);
        return view('admin.orders', compact('commandes', 'produits', 'societes', 'clientsWithoutSociete'));
    }
    public function add_ordre(Request $request)
    {
        $commande = new Commande();
        $commande->date = $request->filled('date') ? $request->input('date') : now();  // ou utilisez la date du formulaire si nécessaire
        $commande->id_societe = $request->input('id_societe');
        $commande->id_client = $request->input('id_client');
        $commande->id_produit = $request->input('id_produit');
        $commande->number = $request->input('number');
        $commande->statut = 'en_cours'; // ou utilisez le statut du formulaire si nécessaire
        $commande->save();
        return redirect()->route('Admin-Commandes');
    }
    public function update_order(Request $request)
    {
        /*
        $request->validate([
            'date' => 'required|date',
            'id_societe' => 'required',
            'id_client' => 'required',
            'id_produit' => 'required',
            'number' => 'required',
            // Ajoutez d'autres règles de validation au besoin
        ]);*/
        $commande = Commande::findOrFail($request->id);

        $commande->date = $request->input('date');
        $commande->id_societe = $request->input('id_societe');
        $commande->id_client = $request->input('id_client');
        $commande->id_produit = $request->input('id_produit');
        $commande->number = $request->input('number');
        $commande->save();

        // Rediriger vers la liste des commandes avec un message de succès
        return redirect()->route('Admin-Commandes')->with('success', 'La commande a été mise à jour avec succès.');
    }
}
