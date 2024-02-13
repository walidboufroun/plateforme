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
}
