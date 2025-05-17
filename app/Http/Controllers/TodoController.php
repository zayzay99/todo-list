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

        return view('admin.index', [
            'dataTodos' => $dataTodo
        ]);
    }

    public function detailTugas($id){
        $tugas = DB::table('tb_todo')
        ->where('id', $id)
        ->get();

        return view('admin.detailTugas', [
            'detailTugas' => $tugas
        ]);
    }

    public function hapusTugas($id){
        DB::table('tb_todo')
        ->where('id', $id)
        ->delete();

        $dataTodos = DB::table('tb_todo')
        ->get();

        return view('admin.index',[
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
        return view('admin.tambahTugas', [
            'pemberiTugas' => $pemberiTugas,
            'pelaksanaTugas' => $pelaksanaTugas
        ]);
    }

    public function simpanTugas(Request $request) {
        DB::table('tb_todo') //simpan dalam database
        ->insert([
            'tugas' => $request->namaTugas,
            'waktu_mulai' => $request->mulaiTugas,
            'waktu_selesai' => $request->selesaiTugas,
            'tugas_dari'=> $request->tugasDari,
            'tugas_untuk'=> $request->tugasUntuk,
            'keterangan' => $request->keteranganTugas 
        ]);

        return "Penyimpanan berhasil!";
    }

    public function ubahTugas(Request $request){
        
        return "Halaman UbahTugas NOT FOUND";
    }
}