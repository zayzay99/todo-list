<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TodoController extends Controller
{
    function tampilkanTodo(){
        $dataTodo = DB::table('tb_todo')
        ->join('tb_pegawai', 'tb_todo.tugas_dari', '=', 'tb_pegawai.id')
        ->select(
            'tb_todo.id',
            'tb_todo.tugas',
            'tb_todo.nama as pemberi_tugas',
            'tb_todo.keterangan'
        )
        ->get();

        return view('pengguna.index', [
            'dataTodos' => $dataTodo
        ]);
    }

    public function detailTugas($id){
        $tugas = DB::table('tb_todo')
        ->where('id', $id)
        ->get();

        return view('pengguna.detailTugas', [
            'detailTugas' => $tugas
        ]);
    }

    public function hapusTugas($id){
        DB::table('tb_todo')
        ->where('id', $id)
        ->delete();

        $dataTodos = DB::table('tb_todo')
        ->get();

        return view('pengguna.index',[
            'dataTodos' => $dataTodos
        ]);
    }

     public function tambahTugas() {
        $pemberiTugas = DB::table('tb_pegawai')
                        ->where('jabatan','=', 'CEO')
                        ->get();
        $pelaksanaTugas = DB::table('tb_pegawai')
                        ->where('jabatan','!=', 'CEO')
                        ->get();
        return view('pengguna.tambahTugas', [
            'pemberiTugas' => $pemberiTugas,
            'pelaksanaTugas' => $pelaksanaTugas
        ]);
    }
}