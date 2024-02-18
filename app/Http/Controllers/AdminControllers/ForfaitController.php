<?php


namespace App\Http\Controllers;

namespace App\Http\Controllers\AdminControllers;

use App\Models\Forfait;
use App\Models\Produit;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ForfaitController extends Controller
{
    public function index()
    {
        $adminController = new AdminController();
        $AlertsCount = $adminController->InfosApp();
        
        $forfaits = Forfait::with('produit')->get();
        $produits = Produit::all();
        return view('admin.forfaits', compact('forfaits', 'produits', 'AlertsCount'));
    }
    public function Add_forfait(Request $request)
    {
        Forfait::create($request->all());
        return redirect()->route('Admin-Forfaits')->with('success', 'Forfait ajouté avec succès.');
    }
    public function Update_Forfait(Request $request)
    {
        // Validate the incoming request data
        $request->validate([
            'id' => 'required',
            'name' => 'required|string',
            'duration' => 'required|integer',
            'description' => 'required|string',
            /*'photos' => 'file|mimes:jpeg,png,jpg,gif,svg|max:2048',*/
            'id_produit' => 'required|exists:produits,id',
        ]);

        // Find the forfait by ID
        $forfait = Forfait::find($request->id);

        if (!$forfait) {
            return redirect()->back()->with('error', 'Forfait not found');
        }

        // Update forfait fields
        $forfait->name = $request->name;
        $forfait->duration = $request->duration;
        $forfait->description = $request->description;

        // Handle photo update
        if ($request->hasFile('photos')) {
            // Upload photo and store the path
            $path = $request->file('photos')->store('forfaits', 'public');
            $forfait->photos = $path;
        }

        // Update related produit
        $forfait->id_produit = $request->id_produit;

        // Save the changes
        $forfait->save();

        // Redirect or respond as needed
        return redirect()->route('Admin-Forfaits')->with('success', 'Forfait updated successfully');
    }
    public function Delete_Forfait(Request $request)
    {
        // Validate the incoming request data
        $request->validate([
            'id' => 'required|exists:forfaits,id',
        ]);

        // Find the forfait by ID
        $forfait = Forfait::find($request->id);

        if (!$forfait) {
            return redirect()->back()->with('error', 'Forfait not found');
        }

        // Delete the forfait
        $forfait->delete();

        // Redirect or respond as needed
        return redirect()->route('Admin-Forfaits')->with('success', 'Forfait deleted successfully');
    }
}
