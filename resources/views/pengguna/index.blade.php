<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <table border="1">

        <tr>
            <td>id</td>
            <td>Nama tugas</td>
            <td>Keterangan</td>
            <td>Aksi</td>
        </tr>
        @php
            $i=0;
        @endphp
         @foreach ($datatodo as $todo)
         <tr>
                <td>{{$todo->id}}</td> 
                <td>{{$todo->tugas}}</td> 
                <td>{{$todo->keterangan}}</td> 
         </tr>       
            @endforeach
    </table>

</body>
</html>