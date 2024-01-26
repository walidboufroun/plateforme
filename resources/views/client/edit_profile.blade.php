<!-- views/home.blade.php -->
@extends('client.layouts.app')

@section('title', 'Modifier Profil')

@section('header', 'Welcome to our Website')

@section('content')
    <h1>Page Modification Profile </a> </h1>
    <form action="Client-profile-edit" method="post">
        @csrf
        
        <label for="name">name</label>
        <input type="text" name="name" id="" value="{{ $client->name }}"><br><br>
        <label for="username">username</label>
        <input type="text" name="username" id="" value="{{ $client->username }}"><br><br>
        <label for="email">email</label>
        <input type="email" name="email" id="" value="{{ $client->email }}"><br><br>
        <label for="password">Password</label>
        <input type="text" name="passone" id="" ><br><br>
        <label for="password">Repet Password</label>
        <input type="text" name="passtwo" id="" ><br><br>
        <label for="phone_number">phone_number</label>
        <input type="texte" name="phone_number" id="" value="{{ $client->phone_number }}"><br><br>
        <button type="submit">Modifier Profile</button>
    </form>

@endsection

@section('footer', '© 2023 Your Website')
