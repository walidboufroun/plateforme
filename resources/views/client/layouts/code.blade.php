<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ma Page</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: 'Arial', sans-serif;
        }

        header {
            background-color: rgb(62, 76, 86);
            color: #fff;
            padding: 10px;
            text-align: center;
        }

        #sidebar {
            height: 100%;
            width: 250px;
            position: fixed;
            left: 0;
            top: 0;
            background-color: rgb(62, 76, 86);
            padding-top: 20px;
            overflow-x: hidden;
        }

        #content {
            margin-left: 250px;
            padding: 20px;
        }

        #sidebar a {
            padding: 8px 8px 8px 32px;
            text-decoration: none;
            font-size: 18px;
            color: #818181;
            display: block;
            transition: 0.3s;
        }

        #sidebar a:hover {
            color: #f1f1f1;
        }

        #footer {
            background-color: #333;
            color: #fff;
            padding: 10px;
            text-align: center;
            position: fixed;
            bottom: 0;
            width: 100%;
        }
    </style>
</head>

<body>
    <header>
        <h3>Espace Client</h3>
        @auth('clients')
        <div><a href="{{ route('Client-profile') }}">Profile</a></div>
        <form action="{{ route('Client-logout') }}" method="post">
            @csrf
            <button type="submit">Déconnexion</button>
        </form>
        @else
            <a href="{{ route('Client-login') }}">Connexion</a>
            @if (Route::has('Client-singup'))
            <a href="{{ route('Client-singup') }}">S'inscrire</a>
            @endif
        @endauth

    </header>

    <div id="sidebar">
        <a href="{{ route('Client-dashboard') }}">Dashboard</a>
        <a href="{{ route('Client-product') }}">Products</a>
        <!--<a href="{{ route('Admin-Categories') }}">Categories</a>-->
        <a href="{{ route('Client-alerts') }}">Alerts</a>
        <a href="{{ route('Client-Reclamation') }}">Reclamation</a>
        <a href="{{ route('Client-Employes') }}">Employees</a>
        <!-- Ajoutez d'autres liens selon vos besoins -->
    </div>

    <div id="content">
        @yield('content')
    </div>

    <div id="footer">
        @yield('footer')
    </div>
</body>

</html>