<?php


namespace App\Http\Controllers;

namespace App\Http\Controllers\AdminControllers;

use App\Models\Client;
use App\Models\Produit;
use App\Models\Societe;
use App\Models\Commande;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class OrderController extends Controller
{
    public function index()
    {
        $adminController = new AdminController();
        $AlertsCount = $adminController->InfosApp();
        
        $produits = Produit::all();
        $societes = Societe::all();
        $clientsWithoutSociete = Client::whereNull('id_societe')->get();
       
        $commandes = Commande::with('Societe')->get();
       
        return view('admin.orders', compact('commandes', 'produits', 'societes', 'clientsWithoutSociete', 'AlertsCount'));
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
    public function Delete_ordre(Request $request)
    {
        // Valider la demande
        $request->validate([
            'id' => 'required|exists:commandes,id',
        ]);

        // Récupérer l'ID de la commande à supprimer
        $orderId = $request->input('id');

        // Trouver la commande
        $commande = Commande::find($orderId);

        if (!$commande) {
            // La commande n'existe pas
            return redirect()->route('Admin-Commandes')->with('error', 'La commande n\'existe pas.');
        }

        // Supprimer la commande
        $commande->delete();

        // Rediriger avec un message de succès
        return redirect()->route('Admin-Commandes')->with('success', 'La commande a été supprimée avec succès.');
    }
}
