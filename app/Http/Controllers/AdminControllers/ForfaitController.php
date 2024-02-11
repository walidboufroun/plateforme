<?php


namespace App\Http\Controllers;
namespace App\Http\Controllers\AdminControllers;

use App\Http\Controllers\Controller;
use App\Models\Forfait;
use App\Models\Produit;
use Illuminate\Http\Request;
class ForfaitController extends Controller
{
    public function index()
    {
        $forfaits = Forfait::with('produit')->get();
        $produits = Produit::all();
        return view('admin.forfaits', compact('forfaits', 'produits'));
    }
    public function Add_forfait(Request $request)
    {
        Forfait::create($request->all());
        return redirect()->route('Admin-Forfaits')->with('success', 'Forfait ajouté avec succès.');

    }
}
