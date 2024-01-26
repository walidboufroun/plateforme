<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class AuthAdmin extends Controller
{
    public function index()
    {
        return view("welcome");
    }
    public function loginpage()
    {
        return view('admin.login');
    }
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            return redirect()->route('Admin-Dashboard'); 
        } else {
            return back()->withErrors(['email' => 'Les informations d\'identification ne correspondent pas.'])
                ->withInput($request->only('email')); 
        }
    }
    public function singuppage()
    {
        return view('admin.singup');
    }
    protected function singup(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'username' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8',
            'phone_number' => 'required|string|max:255',
            'adresse' => 'required|string|max:255',
            'type' => 'required|string|max:255',
        ]);
        
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $user = User::create([
            'name' => $request->name,
            'username' => $request->username,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'phone_number' => $request->phone_number,
            'adresse' => $request->adresse,
            'type' => $request->type,
        ]);
        Auth::login($user);
        return redirect()->intended('Admin-Dashboard');
    }

    public function logout(Request $request)
    {
        Auth::logout(); 
        return redirect('/')->with('status', 'Vous avez été déconnecté avec succès.');
    }
    public function profile()
    {
        $user = auth()->user();
        return view('admin.profile', compact('user'));
    }
    public function edit_profile()
    {
        $user = auth()->user();
        return view('admin.edit_profile', compact('user'));
    }

    public function update_profile(Request $request)
    {
        $user = Auth::user();
        $request->validate([
            'name' => 'required|string|max:255',
            'username' => 'required|string|max:255|unique:users,username,' . $user->id,
            'email' => 'required|string|email|max:255|unique:users,email,' . $user->id,
            'phone_number' => 'required|string|max:255',
            'adresse' => 'required|string|max:255',
            'passone' => 'required|string|min:8',
            'passtwo' => 'required|string|min:8|same:passone', // Doit être identique à passone
        ]);
        if ($request->input('passone') == $request->input('passtwo')) {
            $user->update([
                'name' => $request->input('name'),
                'username' => $request->input('username'),
                'email' => $request->input('email'),
                'phone_number' => $request->input('phone_number'),
                'adresse' => $request->input('adresse'),
                'password' => bcrypt($request->input('passone')), // Hacher le nouveau mot de passe
            ]);
            // Connexion de l'utilisateur après la mise à jour du mot de passe
            Auth::login($user);
            return redirect()->route('Admin-profile')->with('success', 'Profil mis à jour avec succès.');
        } else {
            return redirect()->route('Admin-profile')->withErrors(['passtwo' => 'Les mots de passe ne correspondent pas.']);
        }
    }
}
