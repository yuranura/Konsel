<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Models\Pertanyaan;
use App\Models\Test;
use App\Models\user_test_jawaban;
use App\Models\user_test;
use Illuminate\Http\Request;
use PhpParser\Node\Identifier;
use Illuminate\Support\Facades\Auth;

class PertanyaanController extends Controller
{
     /**
     * index
     *
     * @return void
     */
    // public function UserTest(){
        

    //     return redirect()->route('pertanyaan', $last_id);
    // }

    public function index($test_id){
        user_test::create([
            'test_id' => $test_id,
            'user_id' =>  Auth::id(),
            'mulai' => date('Y-m-d H:i:s')
        ]);
        $last = $test_id == 27;
        $pertanyaan = Pertanyaan::latest();
        $test = Test::where('id', $test_id)->get();
        $pertanyaan = DB::table('pertanyaan')
            ->join('test', 'test.id', '=', 'pertanyaan.test_id')
            // ->join('test', 'test.tipe_soal_id', '=', 'tipe_soal.id')
            ->where('test.id','=', $test_id)
            ->select('pertanyaan.*', 'test.*')
            ->get();
        $pertanyaan = Pertanyaan::where('test_id',$test_id)->get();
        $next = $test_id + 1;
        // dd($next);
        $persent = $test_id * (100 / 27) ;
        $jawaban = session('soal'.$test_id);
        //dd($jawaban);
        return view('pertanyaan', compact('pertanyaan', 'test', 'next', 'test_id', 'persent', 'last', 'jawaban'));

    }

    public function saveSession($last_id,Request $request){
        $jawaban = $request->jawaban;
        // dd($jawaban);
        session(['soal'.$last_id => $jawaban]);
        foreach($jawaban as $val){
            user_test_jawaban::create([
                'id_soal' => $last_id,
                'user_test_id' =>  Auth::id(),
                'pertanyaan_id' => $val
            ]);
        }

        // userTest::where('user_id', Auth:id())->where('test_id',$last_id);

        // dd(session('soal'.$last_id));

        return redirect()->route('pertanyaan', $last_id + 1);
        // return view(compact(''))
    }
    
}
