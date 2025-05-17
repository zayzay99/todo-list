<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class PenggunaController extends Controller
{
    public function login() {
        $todo = DB::table('tb_todo')->get();
        return view('admin.index',[
            'dataTodos'=>$todo
        ]);
    }
}
