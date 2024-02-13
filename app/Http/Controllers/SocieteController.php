<?php

namespace App\Http\Controllers;

use App\Models\Societe;
use Illuminate\Http\Request;

class SocieteController extends Controller
{
    public function index()
    {
        $societes = Societe::all();
        return view('admin.societes', compact('societes'));
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
            'name' => 'required|string',
            'description' => 'required|string',
            'site_web' => 'required|url',
            'adresse' => 'required|string',
            'phone_number' => 'required|string',
            'logo' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'registre_commerce' => 'required|string',
            'type' => 'required|in:SI,SARL,SPA,SNC,SCS',
        ]);

        // Find the Societe by ID
        $societe = Societe::findOrFail($validatedData['id']);

        // Update the Societe with the new data
        $societe->update([
            'name' => $validatedData['name'],
            'description' => $validatedData['description'],
            'site_web' => $validatedData['site_web'],
            'adresse' => $validatedData['adresse'],
            'phone_number' => $validatedData['phone_number'],
            'registre_commerce' => $validatedData['registre_commerce'],
            'type' => $validatedData['type'],
        ]);

        // Handle logo upload if provided
        if ($request->hasFile('logo')) {
            $logoPath = $request->file('logo')->store('logos', 'public');
            $societe->update(['logo' => $logoPath]);
        }

        // Redirect back or wherever you want after updating
        return redirect()->back()->with('success', 'Societe updated successfully');
    }
}
