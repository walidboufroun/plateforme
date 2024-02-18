<?php

namespace App\Http\Controllers;
namespace App\Http\Controllers\AdminControllers;

use App\Models\Alert;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    public function InfosApp()
    {
        $alertsCount = Alert::where('seen', 0)->count();
        return $alertsCount;
    }
    
    public function index()
    {
        return view('admin.admins');
    }
}
