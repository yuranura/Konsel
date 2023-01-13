<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Pertanyaan;
use App\Models\Test;
class PertanyaanController extends Controller
{
    public function read($testId){
        $pertanyaan = Pertanyaan::where('test_id',$testId)->get();
        $test = Test::where('id', $testId)->firstOrFail();
        
        return response()->json(compact('pertanyaan','test'));
        
    }
}
//1. Observasi UI kebutuhan data
//2. Check database
//3. file controller
//4. akses model
//5. routing 
//6. testing postman