<?php

namespace App\Http\Controllers\Api;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class LoginController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function login(Request $request)
    {
        //set validation
        $validator = Validator::make($request->all(), [
            'email'     => 'required',
            'password'  => 'required'
        ]);

        //if validation fails
        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        //get credentials from request
        $credentials = $request->only('email', 'password');
        

        //if auth failed
        if(!$token = auth()->attempt($credentials)) {
             return response()->json([
                 'success' => false,
                 'message' => 'Email atau Password Anda salah'
             ], 401);
         }

        //if auth success
        return response()->json([
            'success' => true,
             'user'    => auth()->user(),    
             'token'   => auth()->user()->createToken('token')->plainTextToken,
        ], 200);
    }
}
// Controller 1 : Api soal
//1. create waktu mulai
// create ::  $test = user_test::create([
    //         'mulai',$request->mulai

//2. Get semua data soal untuk test.
    //$soal=pertanyaan::all();

//3. kembalikan semua data soal test dalam bentuk respon.
// untuk respon jawaban
        //return response()->json([
        // 'data'=> $soal;
        //])
    //public function

// 4. Mengupdate kolom waktu selesai
//    $user = User::update('selesai', $request['selesai']);

// 5. Mencatat jawaban dari user ke database
// create ::  $user = User::create([
    //         'id soal,id user, jawaban,';
