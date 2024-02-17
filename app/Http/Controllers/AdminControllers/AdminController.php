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
        // Compter les alertes avec seen == 0
        $alertsCount = Alert::where('seen', 0)->count();

        // Autres opérations si nécessaire...

        // Retourner la vue avec le compte d'alertes non lues
        return $alertsCount;
    }
    
    public function index()
    {
        return view('admin.admins');
    }
}
