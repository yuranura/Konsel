<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class user_test_jawaban extends Model
{
    use HasFactory;
    protected   $table = "user_test_jawaban";
    public $timestamps = false;
    protected   $fillable =[
        'id_soal',
        'user_test_id',
        'pertanyaan_id',
    ];
}
