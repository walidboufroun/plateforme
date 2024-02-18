<?php

namespace App\Http\Controllers;

namespace App\Http\Controllers\AdminControllers;

use App\Models\Alert;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AlertController extends Controller
{
    public function index()
    {
        $adminController = new AdminController();
        $AlertsCount = $adminController->InfosApp();
        
        $alerts = Alert::all();
        return view('admin.alerts', compact('alerts' , 'AlertsCount'));
    }
    
    public function Update_Alert(Request $request)
    {
        
        // Valider les données du formulaire
        $request->validate([
            'seen' => 'required', // Assurez-vous que la valeur de 'seen' est soit 0, soit 1
        ]);

        try {
            // Récupérer l'alerte à mettre à jour
            $alert = Alert::findOrFail($request->input('id'));

            // Mettre à jour les champs nécessaires
            $alert->seen = $request->input('seen');

            // Enregistrer les modifications
            $alert->save();

            // Rediriger avec un message de succès
            return redirect()->back()->with('success', 'Alerte mise à jour avec succès');
        } catch (\Exception $e) {
            // En cas d'erreur, rediriger avec un message d'erreur
            return redirect()->back()->with('error', 'Erreur lors de la mise à jour de l\'alerte');
        }
    }
}
