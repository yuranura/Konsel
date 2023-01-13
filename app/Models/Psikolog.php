<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Psikolog extends Model
{
    use HasFactory;

    protected $table = "psikologi_data";
    public $timestamps = false;
    protected $fillable = [
        'image_psikolog',
        'user_id',
    ];
}
