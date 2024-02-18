<?php


namespace App\Http\Controllers;

namespace App\Http\Controllers\AdminControllers;

use App\Models\Commentaire;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ComplaintController extends Controller
{
    public function changeStatutReclamation(Request $request, $id)
    {
        // Retrieve the complaint by ID
        $complaint = Commentaire::findOrFail($id);

        // Perform your logic to change the status based on the form data
        $complaint->statut = $request->input('statut');
        // Add other logic as needed

        // Save the changes
        $complaint->save();

        $complaints = Commentaire::with('produit', 'utilisateur')->get();
        // Redirect or return a response as needed
        return redirect()->route('Admin-Reclamation')->with('success', 'Réclamationa modifié avec succès.'); // Replace 'your.success.route' with the actual success route
    }
    public function suprmier_complaint(Request $request, $id)
    {
        $complaint = Commentaire::find($id);

        // Check if the complaint exists
        if ($complaint) {
            // Delete the complaint
            $complaint->delete();

            // Optionally, you can add a flash message or other logic here

            // Redirect or respond as needed
            return redirect()->route('Admin-Reclamation')->with('success', 'Réclamationa supprimé avec succès.'); // Replace 'your.success.route' with the actual success route
        } else {
            // Handle the case where the complaint does not exist
            return abort(404); // You can customize this response code as needed
        }
    }
    public function index()
    {
        $adminController = new AdminController();
        $AlertsCount = $adminController->InfosApp(); 
        
        $complaints = Commentaire::with('produit', 'utilisateur')->get();
        return view('admin.complaints', compact('complaints' , 'AlertsCount'));
    }
}
