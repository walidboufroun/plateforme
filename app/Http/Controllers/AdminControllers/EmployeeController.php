<?php


namespace App\Http\Controllers;
namespace App\Http\Controllers\AdminControllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class EmployeeController extends Controller
{
    public function index()
    {
        $employes = User::all();
        return view('admin.employees', compact('employes'));
    }
    public function Add_Employe(Request $request)
    {
        /*
        $request->validate([
            'name' => 'required|string',
            'username' => 'required|string',
            'email' => 'required|email',
            'password' => 'required|string',
            'passwordconfirmation' => 'required|same:password',
            'phone_number' => 'required|string',
            'adresse' => 'required|string',
            'Type' => 'required|string|in:gnov_admin,gnov_employe,gnov_technicien',
        ]);
    */
        $employe = new User();
        $employe->name = $request->input('name');
        $employe->username = $request->input('username');
        $employe->email = $request->input('email');
        $employe->password = bcrypt($request->input('password'));
        $employe->phone_number = $request->input('phone_number');
        $employe->adresse = $request->input('adresse');
        $employe->Type = $request->input('Type');
        
        $employe->save();
    
        return redirect()->route('Admin-Employees')->with('success', 'L\'employé a été ajouté avec succès.');
    
    }
}
