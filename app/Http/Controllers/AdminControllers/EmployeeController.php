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
    public function Update_Employe(Request $request)
    {
        // Validate the incoming request data
        $validatedData = $request->validate([
            /*'name' => 'required|string|max:255',
            'username' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'password' => 'nullable|string|min:6|confirmed',
            'phone_number' => 'required|string|max:20',
            'adresse' => 'required|string|max:255',
            'type' => 'required|in:gnov_admin,gnov_employe,gnov_technicien',*/]);

        // Find the employee by ID
        $employe = User::find($request->id);



        // Update the employee attributes
        $employe->name = $request->input('name');
        $employe->username = $request->input('username');
        $employe->email = $request->input('email');

        // Update the password only if a new one is provided
        if ($request->input('password')) {
            $employe->password = bcrypt($request->input('password'));
        }

        $employe->phone_number = $request->input('phone_number');
        $employe->adresse = $request->input('adresse');
        $employe->Type = $request->input('type');

        // Save the updated employee
        $employe->save();

        // Redirect or respond as needed
        return redirect()->route('Admin-Employees')->with('success', 'Employee updated successfully');
    }
    public function deleteEmployee(Request $request)
    {
        // Validate the incoming request data
        $request->validate([
            'id' => 'required|exists:users,id',
        ]);

        // Find the employee by ID
        $employee = User::find($request->id);

        if (!$employee) {
            return redirect()->back()->with('error', 'Employee not found');
        }

        // Delete the employee
        $employee->delete();

        // Redirect or respond as needed
        return redirect()->route('Admin-Employees')->with('success', 'Employee deleted successfully');
    }
}
