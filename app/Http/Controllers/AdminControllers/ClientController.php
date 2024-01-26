<?php


namespace App\Http\Controllers;

namespace App\Http\Controllers\AdminControllers;

use App\Http\Controllers\Controller;
use App\Models\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function index()
    {
        $clients = Client::with('societe')->get();
        return view('admin.clients', compact('clients'));
    }
}
