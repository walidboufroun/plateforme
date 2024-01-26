<!-- views/home.blade.php -->
@extends('admin/layouts.app')

@section('title', 'Home Page')

@section('header', 'Welcome to our Website')

@section('content')
    <h1>Page Modification Profile </a> </h1>
    <form action="Admin-profile-edit" method="post">
        @csrf
        
        <label for="name">name</label>
        <input type="text" name="name" id="" value="{{ $user->name }}"><br><br>
        <label for="username">username</label>
        <input type="text" name="username" id="" value="{{ $user->username }}"><br><br>
        <label for="email">email</label>
        <input type="email" name="email" id="" value="{{ $user->email }}"><br><br>
        <label for="password">Password</label>
        <input type="text" name="passone" id="" ><br><br>
        <label for="password">Repet Password</label>
        <input type="text" name="passtwo" id="" ><br><br>
        <label for="phone_number">phone_number</label>
        <input type="texte" name="phone_number" id="" value="{{ $user->phone_number }}"><br><br>
        <label for="adresse">adresse</label>
        <input type="text" name="adresse" id="" value="{{ $user->name }}"><br><br>
        <br>
        <button type="submit">Modifier Profile</button>
    </form>

@endsection

@section('footer', '© 2023 Your Website')
