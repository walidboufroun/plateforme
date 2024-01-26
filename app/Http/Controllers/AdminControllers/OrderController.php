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
        return view('admin.orders', compact('commandes','produits', 'societes', 'clientsWithoutSociete'));
    }
    public function add_ordre(Request $request)
    {
        $commande = new Commande();
        $commande->date_commande = $request->filled('date_commande') ? $request->input('date_commande') : now();  // ou utilisez la date du formulaire si nécessaire
        $commande->id_societe = $request->input('id_societe');
        $commande->id_client = $request->input('id_client');
        $commande->id_produit = $request->input('id_produit');
        $commande->nombre_produit = $request->input('nombre_produit');
        $commande->statut = 'en_cours'; // ou utilisez le statut du formulaire si nécessaire
        $commande->save();
        return redirect()->route('Admin-Commandes');
    }
}