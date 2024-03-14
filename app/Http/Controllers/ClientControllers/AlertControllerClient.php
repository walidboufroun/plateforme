<?php

namespace App\Http\Controllers\Client;

use Illuminate\Http\Request;

namespace App\Http\Controllers\Client;
namespace App\Http\Controllers\ClientControllers;

use App\Http\Controllers\Controller;
use App\Models\Alert;
use Illuminate\Support\Facades\Auth;

class AlertControllerClient extends Controller
{
    public function index()
    {   
        $alerts = Alert::whereHas('produit', function ($query) {
            $query->where('id_societe', Auth::guard('clients')->user()->id_societe);
        })->get();
        return view('client.alerts', compact('alerts'));
    }
}
