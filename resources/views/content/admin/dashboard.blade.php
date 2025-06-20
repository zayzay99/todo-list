<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Profil Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-5">
        <h2 class="text-center">Halo Admin</h2>
        <div class="card shadow-sm">
            <div class="card-body">
                <h5 class="card-title">Informasi Pengguna</h5>
                <p class="card-text"><strong>Nama:</strong> {{ auth()->user()->name }}</p>
                <p class="card-text"><strong>Email:</strong> {{ auth()->user()->email }}</p>
                <p class="card-text"><strong>Role:</strong> Admin</p>
                <hr>
                <h5 class="card-title">Tentang</h5>
                <p class="card-text">Ini adalah halaman profil admin. Anda dapat mengelola tugas dan melihat informasi terkait.</p>
                <a href="/admin/index" class="btn btn-primary">Tambah Tugas</a>
                <a href="{{ route('logout') }}" class="btn btn-danger">Logout</a>
            </div>
        </div>
    </div>
</body>
</html>
