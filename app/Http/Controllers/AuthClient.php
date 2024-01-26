<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Societe;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AuthClient extends Controller
{
    public function index()
    {
        return view("welcome");
    }
    public function loginpage()
    {
        return view('client.login');
    }
    public function login(Request $request)
    {
        // Validation des données du formulaire de connexion
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
        if (Auth::guard('clients')->attempt(['email' => $request->email, 'password' => $request->password])) {
            $user = Auth::guard('clients')->user();
            //dd($user);
            return redirect()->route('Client-dashboard')->withFlash(['name' => $user->name, 'email' => $user->email]);
            //return redirect()->route('test');
        } else {
            return back()->withErrors(['email' => 'Les informations d\'identification ne correspondent pas.'])
                ->withInput($request->only('email'));
        }
    }
    public function logout(Request $request)
    {
        Auth::guard('clients')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
    public function profile()
    {
        $client = Auth::guard('clients')->user();
        $societe_req = Client::with('societe')->find($client->id);
        $societe = $societe_req->societe;
        return view('client.profile', compact('client', 'societe'));
    }
    public function edit_profile()
    {
        $client = Auth::guard('clients')->user();
        return view('client.edit_profile', compact('client'));
    }
    public function update_profile(Request $request)
    {
        $client = Auth::guard('clients')->user();
        $request->validate([
            'name' => 'required|string|max:255',
            'username' => 'required|string|max:255|unique:users,username,' . $client->id,
            'email' => 'required|string|email|max:255|unique:users,email,' . $client->id,
            'phone_number' => 'required|string|max:255',
        ]);
        if ($request->filled('passone') && $request->filled('passtwo') && $request->input('passone') !== $request->input('passtwo')) {
            return back()->withErrors(['passtwo' => 'Les champs de mot de passe ne sont pas identiques.'])->withInput();
        }
        if ($request->filled('passone')) {
            $request->merge(['password' => bcrypt($request->input('passone'))]);
        }
        $client->update($request->all());
        return redirect()->route('Client-profile')->with('success', 'Profil mis à jour avec succès.');
    }
    public function update_societe(Request $request)
    {
        //$societeId = auth()->user()->id_societe;

        // Récupérez la société depuis la base de données
        $societe = Societe::find($request->id_societe);
        //dd($societe);
        // Mettez à jour les propriétés de la société avec les données du formulaire
        $societe->adresse = $request->input('adresse');
        $societe->phone_number = $request->input('phone');
        $societe->site_web = $request->input('site_web');
        $societe->type_societe = $request->input('type_societe');
        $societe->registre_commerce = $request->input('registre_commerce');
        $societe->description = $request->input('description');

        // Enregistrez les modifications dans la base de données
        $societe->save();
        //dd($request);
        return redirect()->route('Client-profile')->with('success', 'Profil mis à jour avec succès.');

    }
    public function singuppage()
    {
        return view('client.singup');
    }
    protected function singup(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'username' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:clients',
            'password' => 'required|string|confirmed|min:8',
            'phone_number' => 'required|string|max:255',
        ]);
        $client = Client::create([
            'name' => $request->name,
            'username' => $request->username,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'phone_number' => $request->phone_number,
        ]);
        Auth::guard('clients')->login($client);
        return redirect()->route('Client-dashboard')->with('success', 'Compte client créé avec succès.')
            ->withInput($request->except(['password', 'password_confirmation']));
    }
}
