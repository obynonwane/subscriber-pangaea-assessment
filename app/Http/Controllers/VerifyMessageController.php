<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class VerifyMessageController extends Controller
{
    //

    public function checkMessaage(Request $request)
    {
        //Prints to Log
        Log::info($request->post());
        return response()->json(["status" => true], 200);
    }
}
