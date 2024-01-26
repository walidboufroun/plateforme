<?php

namespace App\Http\Controllers\Client;

use Illuminate\Http\Request;

namespace App\Http\Controllers\Client;
namespace App\Http\Controllers\ClientControllers;

use App\Http\Controllers\Controller;

class AlertControllerClient extends Controller
{
    public function index()
    {
        return view('client.alerts');
    }
}
