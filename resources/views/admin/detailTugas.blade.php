<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Detail</title>
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

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        td {
            padding: 12px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        tr:hover {
            background-color: #f1f1f1;
        }

        a {
            display: inline-block;
            margin-top: 20px;
            text-decoration: none;
            color: #007BFF;
            font-weight: bold;
        }

        a:hover {
            text-decoration: underline;
        }

        .status-select, .text-input {
            width: 100%;
            padding: 5px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
    </style>
</head>
<body>
    <h1>Informasi Penugasan</h1>
    <form action="/tugas/updateKeterangan/{{$detailTugas[0]->id}}" method="post">
        @csrf
        <table>
            @foreach ($detailTugas as $todo)
                <tr>
                    <td>ID: <input type="text" name="id" value="{{$todo->id}}" readonly></td>
                </tr>
                <tr>
                    <td>Nama: <input type="text" name="tugas" class="text-input" value="{{$todo->tugas}}"></td>
                </tr>
                <tr>
                    <td>Waktu Mulai: <input type="datetime-local" name="waktu_mulai" class="text-input" value="{{date('Y-m-d\TH:i', strtotime($todo->waktu_mulai))}}"></td>
                </tr>
                <tr>
                    <td>Waktu Selesai: <input type="datetime-local" name="waktu_selesai" class="text-input" value="{{date('Y-m-d\TH:i', strtotime($todo->waktu_selesai))}}"></td>
                </tr>
                <tr>
                    <td>Tugas Dari: <input type="text" name="tugas_dari" class="text-input" value="{{$todo->tugas_dari}}"></td>
                </tr>
                <tr>
                    <td>Tugas Untuk: <input type="text" name="tugas_untuk" class="text-input" value="{{$todo->tugas_untuk}}"></td>
                </tr>
                <tr>
                    <td>
                        Keterangan:
                        <select class="status-select" name="keterangan">
                            <option value="Dikerjakan" {{ $todo->keterangan == 'Dikerjakan' ? 'selected' : '' }}>Dikerjakan</option>
                            <option value="Selesai" {{ $todo->keterangan == 'Selesai' ? 'selected' : '' }}>Selesai</option>
                        </select>
                    </td>
                </tr>
            @endforeach
        </table>
        <input type="submit" value="Update Keterangan" style="margin-top: 20px; padding: 10px 15px; background-color: #007BFF; color: white; border: none; border-radius: 4px; cursor: pointer;">
    </form>
    <a href="/admin/index">Kembali</a>
   
</body>
</html>
