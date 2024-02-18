<?php

namespace App\Http\Controllers;

namespace App\Http\Controllers\AdminControllers;

use App\Models\Societe;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SocieteController extends Controller
{
    public function index()
    {
        $adminController = new AdminController();
        $AlertsCount = $adminController->InfosApp();
        
        $societes = Societe::all();
        return view('admin.societes', compact('societes' ,'AlertsCount'));
    }
    public function add_societe(Request $request)
    {
        /*
        $request->validate([
            'nom_societe' => 'required|unique:societes|max:255',
            // Ajoutez d'autres règles de validation au besoin
        ]);*/

        Societe::create($request->all());

        return redirect()->route('Admin-societe')->with('success', 'Société créée avec succès.');
    }
    public function Update_societe(Request $request)
    {
        // Validate the form data
        $validatedData = $request->validate([
            'id' => 'required|exists:societes,id',
            /*'name' => 'required|string',
            'description' => 'required|string',
            'site_web' => 'required|url',
            'adresse' => 'required|string',
            'phone_number' => 'required|string',
            'logo' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'registre_commerce' => 'required|string',*/
            'type' => 'required|in:SI,SARL,SPA,SNC,SCS',
        ]);

        // Find the Societe by ID
        $societe = Societe::findOrFail($validatedData['id']);

        // Update the Societe with the new data
        $societe->update([
            'name' => $request->input('name'),
            'description' => $request->input('description'),
            'site_web' => $request->input('site_web'),
            'adresse' => $request->input('adresse'),
            'phone_number' => $request->input('phone_number'),
            'registre_commerce' => $request->input('registre_commerce'),
            'type' => $request->input('type'),
        ]);

        // Handle logo upload if provided
        if ($request->hasFile('logo')) {
            $logoPath = $request->file('logo')->store('logos', 'public');
            $societe->update(['logo' => $logoPath]);
        }

        // Redirect back or wherever you want after updating
        return redirect()->back()->with('success', 'Societe updated successfully');
    }
    public function Delete_societe(Request $request)
    {
        // Validate the incoming request data
        $request->validate([
            'id' => 'required|exists:societes,id',
        ]);

        // Find the société by ID
        $societe = Societe::find($request->id);

        if (!$societe) {
            return redirect()->back()->with('error', 'Société not found');
        }

        // Delete the société
        $societe->delete();

        // Redirect or respond as needed
        return redirect()->route('Admin-societe')->with('success', 'Société deleted successfully');
    }
}
