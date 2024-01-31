<?php

namespace App\Http\Controllers\Client;
namespace App\Http\Controllers\ClientControllers;

use App\Http\Controllers\Controller;
use App\Models\Client;
use Illuminate\Http\Request;

class EmployeeControllerClient extends Controller
{
    public function index(){
        $employes = Client::all();
        return view('client.employes', compact('employes'));
    }
}
