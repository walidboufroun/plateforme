<?php

namespace App\Http\Controllers\Client;

use Illuminate\Http\Request;

namespace App\Http\Controllers\Client;
namespace App\Http\Controllers\ClientControllers;

use App\Http\Controllers\Controller;
use App\Models\Alert;

class AlertControllerClient extends Controller
{
    public function index()
    {
        $alerts = Alert::all();   
        return view('client.alerts', compact('alerts'));
    }
}
