<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
     protected $table = 'tb_todo';
     protected $primaryKey = 'id';
     public $timestamps = false;
     protected $fillable = [
        'tugas',
        'waktu_mulai',
        'waktu_selesai',
        'tugas_dari',
        'tugas_untuk',
        'keterangan',
        'notes',
    ];
}
