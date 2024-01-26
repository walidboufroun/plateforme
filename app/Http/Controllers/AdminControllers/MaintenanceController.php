<?php

namespace App\Http\Controllers;
namespace App\Http\Controllers\AdminControllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
class MaintenanceController extends Controller
{
    public function index()
    {
        return view('admin.maintenance');
    }
}
