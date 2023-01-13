<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Psikolog;
use Illuminate\Support\Facades\Storage;

class PsikologController extends Controller
{
    public function index()
    {
        $user = User::all();
        return view('dashboard.psikolog', compact('user'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
            'tanggal_lahir' => 'required',
            'kota_lahir' => 'required',
        ]);

        $account = new User;

        $account->name = $request->name;
        $account->email = $request->email;
        $account->password = $request->password;
        $account->role = 3;
        $account->tanggal_lahir = $request->tanggal_lahir;
        $account->kota_lahir = $request->kota_lahir;
        $account->save();

        return redirect()->route('psikolog');
    }

    public function hapusPsikolog(Request $request)
    {
        $id = $request->id;
        $user = User::find($id);
        $user->delete();

        return redirect()->route('psikolog');
    }

    public function editPsikolog(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
            'tanggal_lahir' => 'required',
            'kota_lahir' => 'required',
        ]);

        $account = User::find($id);
        $account->name = $request->name;
        $account->email = $request->email;
        $account->password = $request->password;
        $account->role = 3;
        $account->tanggal_lahir = $request->tanggal_lahir;
        $account->kota_lahir = $request->kota_lahir;
        $account->save();

        return redirect()->route('psikolog');
    }

    public function inputGambar(Request $request)
    {
        $id = $request->id;
        $request->validate([
            'image_psikolog' => 'required',
        ]);

        $psikolog = new Psikolog;
        $request->file('image_psikolog');
        $extension = $request->file('image_psikolog')->extension();
        $imgname = date('dmHis').'.'.$extension;
        $path = Storage::putFileAs(
            'public/img',
            $request->file('image_psikolog'),
            $imgname
        );
        $psikolog->image_psikolog = $imgname;
        $psikolog->user_id = $id;
        // dd($imgname);
        $psikolog->save();

        return redirect()->route('psikolog', $id);
    }
}
