<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Detail</title>
</head>
<body>
     Informasi Penugasan 
    
    <table>
        
        {{-- <tr>
            <td>Tugas</td>
            <td>{{ $detailTodo->tugas }}</td>
        </tr>
        <tr>
            <td>Waktu Ditugaskan</td>
            <td>{{ $detailTodo->waktu_mulai }}</td>
        </tr>
        <tr>
            <td>Waktu Selesai</td>
            <td>{{ $detailTodo->waktu_selesai }}</td>
        </tr>
        <tr>
            <td>Tugas Dari</td>
            <td>{{ $detailTodo->tugas_dari }}</td>
        </tr>
        <tr>
            <td>Tugas Untuk</td>
            <td>{{ $detailTodo->tugas_untuk }}</td>
        </tr>
        <tr>
            <td>Keterangan</td>
            <td>{{ $detailTodo->keterangan }}</td>
        </tr> --}}

        @php
            $i=0;
        @endphp
        @foreach ($detailTugas as $todo)
            <tr><td>id {{$todo->id}}</td></tr>
            <tr><td>Nama {{$todo->tugas}}</td></tr>
            <tr><td>Waktu Mulai {{$todo->waktu_mulai}}</td></tr>
            <tr><td>waktu Selesai {{$todo->waktu_selesai}}</td></tr>
            <tr><td>Tugas Dari {{$todo->tugas_dari}}</td></tr>
            <tr><td>Tugas untuk {{$todo->tugas_untuk}}</td></tr>
            <tr><td>keterangan {{$todo->keterangan}}</td></tr>
            

        @endforeach
    </table>
 <a href="/pengguna/index">Kembali</a>
 <a href="/tugas/ubahTugas">Ubah Tugas</a>
</body>
</html>