<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>TODOLIST</title>
    <a href="/">Logout</a>
</head>
<body>
    Data Pengguna
    <br>   
 <a href="/tugas/tambahTugas">Tambah Tugas</a>
    <table border="1">

        <tr>
            <td>id</td>
            <td>Nama tugas</td>
            <td>Tugas Dari</td></td>
            <td>Keterangan</td>
            <td>Aksi</td>
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
               <td><a href="/tugas/detailTugas/{{ $todo->id }}">Detail Tugas</a> |</td>
              <td><a href="/tugas/hapusTugas/{{$todo->id}} ">Hapus</a></td> 
              <td><a href="/tugas/ubahTugas/{{$todo->id}} ">Edit</a></td> 

         </tr>       
            @endforeach
    </table>

</body>
</html>