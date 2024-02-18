<?php

namespace App\Http\Controllers;
namespace App\Http\Controllers\AdminControllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index()
    {
        $adminController = new AdminController();
        $AlertsCount = $adminController->InfosApp();
        return view('admin.dashboard' , compact('AlertsCount'));
    }
}
