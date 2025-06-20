<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>TODOLIST</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
        }

        h1 {
            text-align: center;
            color: #333;
        }

        a {
            text-decoration: none;
            color: #007BFF;
        }

        a:hover {
            text-decoration: underline;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            padding: 12px;
            text-align: left;
            border: 1px solid #ddd;
        }

        th {
            background-color: #007BFF;
            color: white;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        tr:hover {
            background-color: #ddd;
        }

        .action-links {
            display: flex;
            gap: 10px;
        }
    </style>
     <a href="/admin/home" type="button" class="btn btn-primary">Kembali</a>
    
</head>
<body>
    <h1>Data Pengguna</h1>
     <a href="/tugas/tambahTugas" type="button" class="btn btn-primary">Tambah Tugas</a>
    <table>
        <tr>
            <th>id</th>
            <th>Nama tugas</th>
            <th>Tugas Dari</th>
            <th>Keterangan</th>
            <th>Aksi</th>
        </tr>
        @php
            $i=0;
        @endphp
        @foreach ($dataTodos as $todo)
        <tr>
            <td>{{$todo->id}}</td> 
            <td>{{$todo->tugas}}</td> 
            <td>{{$todo->tugas_dari}}</td>
            <td>{{$todo->keterangan}}</td> 
            <td class="action-links">
                 <a href="/tugas/detailTugas/{{$todo->id}} type="button" class="btn btn-primary">Detail Tugas</a>
                 <a href="/tugas/hapusTugas/{{$todo->id}} type="button" class="btn btn-primary">Hapus Tugas</a>
             
            </td>
        </tr>       
        @endforeach
    </table>
</body>
</html>
