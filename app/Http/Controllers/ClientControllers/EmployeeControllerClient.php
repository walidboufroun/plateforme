<?php

namespace App\Http\Controllers\Client;

namespace App\Http\Controllers\ClientControllers;

use App\Http\Controllers\Controller;
use App\Models\Client;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Storage;

class EmployeeControllerClient extends Controller
{
    public function index()
    {
        $employes = Client::all();
        return view('client.employes', compact('employes'));
    }

    public function addEmployee(Request $request)
    {
        $employee = new Client();
        $employee->username = $request->input('username');
        $employee->password = $request->input('password');
        $employee->email = $request->input('email');
        $employee->name = $request->input('name');
        $employee->phone_number = $request->input('phone_number');
        $employee->type = $request->input('type');
        $employee->id_societe = $request->input('id_societe');
        $employee->adresse = $request->input('adresse');
        $employee->photo = $request->input('photo');
        $employee->save();
        if ($request->hasFile('photo')) { dd($request->file('photo')); }
        $file = $request->file('photo');
        $fileName = time() . '_' . $file->getClientOriginalName();
        $file->storeAs('images/client', $fileName);

        return redirect()->route('Client-Employes');
    }
    public function deleteEmployee($id)
    {
        Client::find($id)->delete();
        return redirect()->route('Client-Employes');
    }
}
