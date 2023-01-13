<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Pertanyaan;
use App\Models\user_test;

class user_test_jawaban extends Controller

{
    public function index()
    {
        $pertanyaan = DB::table('user_test_jawaban', 'a')
                        ->join('pertanyaan', 'pertanyaan.id', '=', 'a.pertanyaan_id')
                        ->join('user_test', 'user_test.id', '=', 'a.user_test_id')
                        ->join('users', 'users.id', '=', 'a.user_test_id')
                        ->get();
        
        return view ('dashboard.detail-tes', compact('pertanyaan'));
    }
}
