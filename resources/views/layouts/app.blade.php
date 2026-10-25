<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>LaporBanjir</title>
    <style>
        body { font-family: Arial, sans-serif; max-width: 700px; margin: 0 auto; padding: 20px; }
        nav a { margin-right: 15px; }
        nav form { display: inline; }
        nav button { display: inline; width: auto; padding: 0; margin: 0; border: none; background: none; color: blue; text-decoration: underline; cursor: pointer; font-size: inherit; }
        input, button { display: block; margin-bottom: 10px; padding: 8px; width: 100%; box-sizing: border-box; }
        .error { color: #c0392b; margin: -5px 0 10px; font-size: 14px; }
        .card { border: 1px solid #ccc; border-radius: 6px; padding: 12px; margin-bottom: 12px; }
        .badge { padding: 3px 10px; border-radius: 4px; color: #fff; font-weight: bold; }
        .Waspada { background: #d4a000; }
        .Siaga { background: #e67e22; }
        .Awas { background: #c0392b; }
        .alert { padding: 12px; border-radius: 6px; margin-bottom: 15px; }
        .alert-success { background: #d4edda; }
        .alert-info { background: #d1ecf1; }
        .alert-danger { background: #f8d7da; }
    </style>
</head>
<body>
    <h1>LaporBanjir</h1>
    <nav>
        <a href="{{ route('laporan.create') }}">Buat Laporan</a>

        @auth
            <a href="{{ route('laporan.index') }}">Daftar Laporan</a>
            <a href="{{ route('profil') }}">Profil Petugas</a>
            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button type="submit">Logout</button>
            </form>
        @endauth

        @guest
            <a href="{{ route('login') }}">Login</a>
            <a href="{{ route('register') }}">Register</a>
        @endguest
    </nav>
    <hr>
    @yield('content')
</body>
</html>