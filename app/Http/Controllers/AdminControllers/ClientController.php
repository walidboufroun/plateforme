<?php


namespace App\Http\Controllers;

namespace App\Http\Controllers\AdminControllers;

use App\Models\Client;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ClientController extends Controller
{
    public function index()
    {
        $adminController = new AdminController();
        $AlertsCount = $adminController->InfosApp(); 
        
        $clients = Client::with('societe')->get();
        return view('admin.clients', compact('clients', 'AlertsCount'));
    }
    public function Add_client(Request $request)
    {
        /*
        // Validation (customize this according to your needs)
        $validatedData = $request->validate([
            'id' => 'required|exists:clients,id',
            'name' => 'required|string|max:255',
            'username' => 'required|string|max:255',
            'password' => 'required|string',
            'email' => 'required|email|max:255',
            'photo' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'adresse' => 'required|string|max:255',
            'phone_number' => 'required|string|max:20',
            'role' => 'required|in:gerant,superviseur,employe',
        ]);
*/
        // Create a new client
        $client = Client::create($request->all());

        // Redirect or perform any additional actions
        return redirect()->route('Admin-Clients')->with('success', 'Client added successfully.');
    }
    public function update_client(Request $request  )
    {
        // Validation (customize this according to your needs)
        $validatedData = $request->validate([
            'id' => 'required|exists:clients,id',
            'name' => 'required|string|max:255',
            'username' => 'required|string|max:255',
            'password' => 'required|string',
            'email' => 'required|email|max:255',
            //'photo' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'adresse' => 'required|string|max:255',
            'phone_number' => 'required|string|max:20',
            'role' => 'required|in:gerant,superviseur,employe',
        ]);

        // Retrieve the client by ID
        $client = Client::findOrFail($validatedData['id']);

        // Update the client's information
        $client->update($validatedData);

        // Handle photo upload if provided
        if ($request->hasFile('photo')) {
            $photoPath = $request->file('photo')->store('img-profile');
            $client->photo = $photoPath;
            $client->save();
        }

        // Redirect or perform any additional actions
        return redirect()->route('Admin-Clients')->with('success', 'Client updated successfully.');
    }
    public function delete_client(Request $request)
    {
        // Validation (customize this according to your needs)
        $validatedData = $request->validate([
            'id' => 'required|exists:clients,id',
        ]);

        // Retrieve the client by ID
        $client = Client::findOrFail($validatedData['id']);

        // Delete the client
        $client->delete();

        // Redirect or perform any additional actions
        return redirect()->route('Admin-Clients')->with('success', 'Client deleted successfully.');
    }
}
