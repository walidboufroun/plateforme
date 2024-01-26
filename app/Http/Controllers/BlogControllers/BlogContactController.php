<?php

namespace App\Http\Controllers\BlogControllers;

use Illuminate\Http\Request;

use App\Models\Contact;

use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\Session;

class BlogContactController extends Controller
{
    public function index(Request $request)
    {
        try {
            // Store the form data in the database
            Contact::create($request->all());

            // Flash a success message
            Session::flash('success', 'Votre message de contact a bien envoyer');

            // Redirect to the dashboard or any other page
            return redirect()->route('welcome'); // Change 'dashboard' to your actual route
        } catch (\Exception $e) {
            // Flash an error message
            Session::flash('error', 'Failed to store data. Please try again.');

            // Redirect back to the previous page
            return redirect()->back()->withInput();
        }
    }
}
