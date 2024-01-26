<?php

namespace App\Http\Controllers\Client;
namespace App\Http\Controllers\ClientControllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductAnomalyControllerClient extends Controller
{
    //
    public function index()
    {
        return view('client.product');
    }
}
