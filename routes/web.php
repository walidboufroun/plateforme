<?php

use App\Http\Controllers\AuthAdmin;
use App\Http\Controllers\AuthClient;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;

//Admin
use App\Http\Controllers\SocieteController;
use App\Http\Controllers\AdminControllers\AlertController;
use App\Http\Controllers\AdminControllers\OrderController;
use App\Http\Controllers\AdminControllers\ClientController;
use App\Http\Controllers\AdminControllers\ForfaitController;
use App\Http\Controllers\AdminControllers\ProductController;
use App\Http\Controllers\AdminControllers\CategoryController;
use App\Http\Controllers\AdminControllers\EmployeeController;
use App\Http\Controllers\AdminControllers\ComplaintController;
use App\Http\Controllers\AdminControllers\DashboardController;
use App\Http\Controllers\BlogControllers\BlogContactController;
use App\Http\Controllers\AdminControllers\MaintenanceController;
use App\Http\Controllers\ClientControllers\AlertControllerClient;
use App\Http\Controllers\ClientControllers\EmployeeControllerCleint;
use App\Http\Controllers\ClientControllers\EmployeeControllerClient;
use App\Http\Controllers\ClientControllers\ComplaintControllerCleint;
use App\Http\Controllers\ClientControllers\ComplaintControllerClient;
use App\Http\Controllers\ClientControllers\DashboardControllerClient;
use App\Http\Controllers\ClientControllers\ProductAnomalyControllerCleint;
use App\Http\Controllers\ClientControllers\ProductAnomalyControllerClient;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Blog routes
//Route::get('/', [AuthAdmin::class, 'index']);
Route::get('/', function () {
    return view('blog.welcome');
})->name('dashboard');
Route::get('/welcome', function () {
    return view('blog.welcome');
})->name('welcome');
Route::get('/ESPACE-ADMIN', [AuthAdmin::class, 'loginpage'])->name('ESPACE-ADMIN');
Route::get('/ESPACE-CLIENT', [AuthClient::class, 'loginpage'])->name('ESPACE-CLIENT');

Route::get('not-permiterd', function () {
    return 'Not permited';
})->name('not-permiterd');


// admin routes
Route::get('Admin-login', [AuthAdmin::class, 'loginpage'])->name('Admin-login');
Route::get('Admin-singup', [AuthAdmin::class, 'singuppage'])->name('Admin-singup');
Route::post('Admin-login', [AuthAdmin::class, 'login']);
Route::post('Adminsingup', [AuthAdmin::class, 'singup']);

Route::middleware(['auth.admin'])->group(function () {
    Route::get('Admin-Dashboard', [DashboardController::class, 'index'])->name('Admin-Dashboard');
    
    Route::get('Admin-logout', [AuthAdmin::class, 'logout'])->name('Admin-logout');
    Route::post('/logout', [AuthAdmin::class, 'logout'])->name('logout');
    
    Route::get('Admin-Produit', [ProductController::class, 'index'])->name('Admin-Produit');
    Route::post('Admin_Add_Produit', [ProductController::class, 'Add_client']);
    
    Route::get('Admin-Categories', [CategoryController::class, 'index'])->name('Admin-Categories');
    Route::get('Admin-Commandes', [OrderController::class, 'index'])->name('Admin-Commandes');
    Route::post('Admin_Add_ordre', [OrderController::class, 'add_ordre']);
    Route::post('Admin_Delete_ordre', [OrderController::class, 'Delete_ordre']);
    
    Route::post('Admin_Update_Order', [OrderController::class, 'update_order']);
    
    Route::get('Admin-Clients', [ClientController::class, 'index'])->name('Admin-Clients');
    Route::post('Admin_Add_client', [ClientController::class, 'Add_client']);
    Route::post('Admin_update_client', [ClientController::class, 'update_client']);
    Route::post('Admin_delete_client', [ClientController::class, 'delete_client']);
    //Forfait
    Route::get('Admin-Forfaits', [ForfaitController::class, 'index'])->name('Admin-Forfaits');
    Route::post('Admin_Add_forfait', [ForfaitController::class, 'Add_forfait']);
    
    Route::get('Admin-maintenance', [MaintenanceController::class, 'index'])->name('Admin-maintenance');
    
    Route::get('Admin-societe', [SocieteController::class, 'index'])->name('Admin-societe');
    Route::post('Admin_Add_Societe', [SocieteController::class, 'Add_societe']);
    Route::post('Admin_Update_societe', [SocieteController::class, 'Update_societe']);
    
    Route::post('Admin-Add-societe', [SocieteController::class, 'add_societe']);
    Route::get('Admin-alerts', [AlertController::class, 'index'])->name('Admin-alerts');
    Route::get('Admin-Reclamation', [ComplaintController::class, 'index'])->name('Admin-Reclamation');
    Route::post('change_statut_reclamation/{id}', [ComplaintController::class, 'changeStatutReclamation']);
    Route::post('Admin-suprmier_complaint/{id}', [ComplaintController::class, 'suprmier_complaint']);
    
    Route::get('Admin-Employees', [EmployeeController::class, 'index'])->name('Admin-Employees');
    Route::post('Admin_Add_Employe', [EmployeeController::class, 'Add_Employe']);
    
    Route::get('Admin-profile', [AuthAdmin::class, 'profile'])->name('Admin-profile');
    Route::get('Admin-Edit-Profile', [AuthAdmin::class, 'edit_profile'])->name('Admin-profile_edit');
    Route::post('Admin-profile-edit', [AuthAdmin::class, 'update_profile'])->name('Admin-profile-edit');
    Route::get('Admin-Delete-Profile', [AuthAdmin::class, 'profile'])->name('profile_delete');
    
});


//client routes
Route::get('Client-login', [AuthClient::class, 'loginpage'])->name('Client-login');
Route::post('Client-login', [AuthClient::class, 'login']);
Route::get('Client-singup', [AuthClient::class, 'singuppage'])->name('Client-singup');
Route::post('Clientsingup', [AuthClient::class, 'singup']);

Route::middleware(['auth.client'])->group(function () {
    Route::get('Client-dashboard', [DashboardControllerClient::class, 'index'])->name('Client-dashboard'); 
    Route::post('Client-logout', [AuthClient::class, 'logout']);
    Route::get('Client-logout', [AuthClient::class, 'logout'])->name('Client-logout');
    Route::get('Client-alerts', [AlertControllerClient::class, 'index'])->name('Client-alerts'); 
    Route::get('Client-product', [ProductAnomalyControllerClient::class, 'index'])->name('Client-product'); 
    Route::get('Client-Employes', [EmployeeControllerClient::class, 'index'])->name('Client-Employes'); 
    
    Route::get('Client-profile', [AuthClient::class, 'profile'])->name('Client-profile');
    Route::get('Client-Edit-Profile', [AuthClient::class, 'edit_profile'])->name('Client-profile_edit');
    Route::post('Client-profile-edit', [AuthClient::class, 'update_profile'])->name('Client-profile-edit');
    Route::post('Client-societe-edit', [AuthClient::class, 'update_societe']);
    Route::get('Client-Reclamation', [ComplaintControllerClient::class, 'index'])->name('Client-Reclamation');
    
    Route::post('deleteEmployee/{id}', [EmployeeControllerClient::class, 'deleteEmployee']);
    Route::post('modifyEmployee/{id}', [EmployeeControllerClient::class, 'modifyEmployee']);
    Route::post('addEmployee', [EmployeeControllerClient::class, 'addEmployee']);
});

Route::prefix('Blog')->group(function () {
        Route::get('/', function () {
        return view('blog.welcome');
    });
    Route::get('/welcome', function () {
        return view('blog.welcome');
    })->name('welcome');
    Route::get('/About', function () {
        return view('blog.about');
    })->name('about');
    Route::get('/Service', function () {
        return view('blog.service');
    })->name('service');
    Route::get('/Product', function () {
        return view('blog.product');
    })->name('Product');
    // Route::get('/Immobilier', function () {
    //     return view('blog.immobiliers');
    // })->name('immobiliers');
    Route::get('/Immobiliers', function () {
        return view('blog.immobiliers');
    })->name('immobiliers');
    Route::get('/Secteur', function () {
        return view('blog.immobiliers');
    })->name('Secteur');
    Route::get('/Centres', function () {
        return view('blog.centres');
    })->name('centres');
    Route::get('/Team', function () {
        return view('blog.team');
    })->name('team');
    Route::get('/Why', function () {
        return view('blog.why');
    })->name('why');
    Route::get('/contact', function () {
        return view('blog.contact');
    })->name('contact');
    Route::post('/DoContact', [BlogContactController::class, 'index']);
});






