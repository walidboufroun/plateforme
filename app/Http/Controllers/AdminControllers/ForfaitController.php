<?php


namespace App\Http\Controllers;
namespace App\Http\Controllers\AdminControllers;

use App\Http\Controllers\Controller;
use App\Models\Forfait;
use Illuminate\Http\Request;
class ForfaitController extends Controller
{
    public function index()
    {
        $forfaits = Forfait::with('produit')->get();
        return view('admin.forfaits', compact('forfaits'));
    }
}
