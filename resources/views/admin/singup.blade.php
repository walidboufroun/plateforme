<a href="{{ route('welcome') }}">Welcome Page</a>
<h1>Singup</h1>
<form action="Adminsingup " method="post">
    @csrf
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li style="color: red;">{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <h2>welcome</h2>
    <label for="name">name</label>
    <input type="text" name="name" id="" value="{{ old('name') }}"><br>
    <label for="username">username</label>
    <input type="text" name="username" id="" value="{{ old('username') }}"><br>
    <label for="email">email</label>
    <input type="email" name="email" id="" value="{{ old('email') }}"><br>
    <label for="password">password</label>
    <input type="text" name="password" id=""><br>
    <label for="phone_number">phone_number</label>
    <input type="texte" name="phone_number" id="" value="{{ old('phone_number') }}"><br>
    <label for="adresse">adresse</label>
    <input type="text" name="adresse" id="" value="{{ old('adresse') }}"><br>
    <label for="type">Type</label>
    <select name="type" id="">
        <option value="gnov_employe" @if (old('type') == 'gnov_employe') selected @endif>Choose ...</option>
        <option value="gnov_employe" @if (old('type') == 'gnov_employe') selected @endif>Employe</option>
        <option value="gnov_technicien" @if (old('type') == 'gnov_technicien') selected @endif>Technicien</option>
    </select><br>
    <button type="submit">Login</button>
</form>
