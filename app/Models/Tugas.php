<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tugas extends Model
{
    use HasFactory;

    // Specify the table if it's other than 'tugas' (default to snake_case plural)
    // protected $table = 'tugas';

    // The attributes that are mass assignable
    protected $fillable = [
        'tugas',
        'waktu_mulai',
        'waktu_selesai',
        'tugas_dari',
        'tugas_untuk',
        'keterangan',
        'notes',
    ];

    // If your primary key is not "id", specify
    // protected $primaryKey = 'id';

    // If timestamps are not used, set to false
    // public $timestamps = true;
}

