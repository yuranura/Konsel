<?php

namespace App\Http\Controllers;

use App\Models\Pertanyaan;
use App\Models\Test;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class PaketSoalController extends Controller
{
     /**
     * index
     *
     * @return void
     */

    public function index()
    {
        $test = Test::all();
        return view('dashboard.soal', compact('test'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'deskripsi' => 'required',
            'durasi_detik' => 'required',
            'tipe_soal_id' => 'required',
        ]);

        $pertanyaan = new Test;

        $pertanyaan->name = $request->name;
        $pertanyaan->deskripsi = $request->deskripsi;
        $pertanyaan->durasi_detik = $request->durasi_detik;
        $pertanyaan->tipe_soal_id = $request->tipe_soal_id;
        $pertanyaan->save();

        return redirect()->route('soal');
    }

    public function hapusSoal(Request $request)
    {
        $id = $request->id;
        $test = Test::find($id);
        $test->delete();

        return redirect()->route('soal');
    }

    public function viewSoal($id)
    {

        // $name = $request->name;
        $test = Test::find($id);
        $pertanyaan = DB::table('pertanyaan')
            ->join('test', 'test.id', '=', 'pertanyaan.test_id')
            // ->join('test', 'test.tipe_soal_id', '=', 'tipe_soal.id')
            ->where('pertanyaan.test_id','=',$id)
            ->select('test.*', 'pertanyaan.*')
            ->get();
            // dd($pertanyaan);
        return view('dashboard.addsoal', compact('test','pertanyaan','id'));
    }

    public function editSoal($id, Request $request)
    {
        $request->validate([
            'name' => 'required',
            'deskripsi' => 'required',
            'durasi_detik' => 'required',
        ]);

        $pertanyaan = Test::find($id);

        $pertanyaan->name = $request->name;
        $pertanyaan->deskripsi = $request->deskripsi;
        $pertanyaan->durasi_detik = $request->durasi_detik;
        $pertanyaan->save();

        return redirect()->route('soal');
    }

    public function addPertanyaan($id, Request $request)
    {
        $test = Test::find($id);
        // $pertanyaan = DB::table('pertanyaan')
        //     ->join('test', 'test.id', '=', 'pertanyaan.test_id')
        //     // ->join('test', 'test.tipe_soal_id', '=', 'tipe_soal.id')
        //     ->where('pertanyaan.test_id','=',$id)
        //     ->select('pertanyaan.*', 'test.*')
        //     ->get();
        $request->validate([
            'pertanyaan' => 'required',
        ]);


        // dd($file);
        $pertanyaan = new Pertanyaan;
        if($request->file('pertanyaan')){
            $extension = $request->file('pertanyaan')->extension();
            $imgname = date('dmHis').'.'.$extension;
            // $imgname = $request->file('pertanyaan')->getClientOriginalName();
            $path = Storage::putFileAs(
                'public/img',
                $request->file('pertanyaan'),
                $imgname
            );
            $pertanyaan->pertanyaan = $imgname;
        } else{
            $pertanyaan->pertanyaan = $request->pertanyaan;
        }
        $pertanyaan->skor = '2';
        $pertanyaan->test_id = $id;
        // var_dump($request, $soal);
        // $tujuan_upload = 'data_file';
	    // $pertanyaan->;
        $pertanyaan->save();
        // dd($soal);
        return redirect()->route('viewSoal',$id);
        // return view('dashboard.addsoal', compact('test'));
    }

    public function editpertanyaan($id, Request $request)
    {
        $request->validate([
            'pertanyaan' => 'required',
        ]);
        $id_soal = $request->id_soal;

        $pertanyaan = Pertanyaan::find($id);

        $pertanyaan->pertanyaan = $request->pertanyaan;
        $pertanyaan->save();

        return redirect()->route('viewSoal', $id_soal);
    }

    public function hapusPertanyaan(Request $request)
    {
        $id = $request->id;
        $id_soal = $request->id_soal;
        // dd( $id_soal);
        $soal = Pertanyaan::find($id);
        // dd($id);
        $soal->delete();
        return redirect()->route('viewSoal', $id_soal);
    }

}
