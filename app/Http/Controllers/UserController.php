<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        $user = User::all();
        return view('dashboard.user', compact('user'));
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
        $account->role = 2;
        $account->tanggal_lahir = $request->tanggal_lahir;
        $account->kota_lahir = $request->kota_lahir;
        $account->save();

        return redirect()->route('user');
    }

    public function hapusAkun(Request $request)
    {
        $id = $request->id;
        $user = User::find($id);
        $user->delete();

        return redirect()->route('user');
    }

    public function editAkun(Request $request, $id)
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
        $account->role = 2;
        $account->tanggal_lahir = $request->tanggal_lahir;
        $account->kota_lahir = $request->kota_lahir;
        $account->save();

        return redirect()->route('user');
    }
}
