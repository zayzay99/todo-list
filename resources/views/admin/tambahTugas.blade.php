<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Tugas</title>
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

        form {
            background-color: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            max-width: 600px;
            margin: auto;
        }

        table {
            width: 100%;
            margin-top: 20px;
        }

        td {
            padding: 12px;
            text-align: left;
        }

        input[type="text"],
        input[type="date"],
        select {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        input[type="submit"] {
            background-color: #007BFF;
            color: white;
            border: none;
            padding: 10px 15px;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }

        input[type="submit"]:hover {
            background-color: #0056b3;
        }

        a {
            text-decoration: none;
            color: #007BFF;
        }

        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <h1>Tambah Tugas</h1>
    <form action="/tugas/simpanTugasBaru" method="post">
        @csrf
        <table>
            <tr>
                <td>Nama Tugas</td>
                <td><input type="text" name="namaTugas" required></td>
            </tr>
            <tr>
                <td>Waktu Mulai</td>
                <td><input type="date" name="mulaiTugas" required></td>
            </tr>
            <tr>
                <td>Waktu Selesai</td>
                <td><input type="date" name="selesaiTugas" required></td>
            </tr>
            <tr>
                <td>Tugas Dari</td>
                <td>
                    <select name="tugasDari" required>
                        @foreach ($pemberiTugas as $pemberi)
                            <option value="{{ $pemberi->id }}">{{ $pemberi->nama }}</option>
                        @endforeach
                    </select>
                </td>
            </tr>
            <tr>
                <td>Tugas Untuk</td>
                <td>
                    <select name="tugasUntuk" required>
                        @foreach ($pelaksanaTugas as $pelaksana)
                            <option value="{{ $pelaksana->id }}">{{ $pelaksana->nama }}</option>
                        @endforeach
                    </select>
                </td>
            </tr>
            <tr>
                <td>Keterangan</td>
                <td>
                    <select name="keteranganTugas" required>
                        <option value="Dikerjakan">Dikerjakan</option>
                        <option value="Selesai">Selesai</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="Simpan"></td>
            </tr>
            <tr>
                <td></td>
                <td><a href="/admin/index">Kembali</a></td>
            </tr>
        </table>
    </form>
</body>
</html>
