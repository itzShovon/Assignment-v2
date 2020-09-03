<?php

namespace App\Http\Controllers;

use App\RUAuths\Auth;
use Illuminate\Http\Request;

class AuthsController extends Controller
{
    // public function index(){
    //     return view('auth');
    // }


    public function login(Request $request){
        $this->validate($request, [
            'id' => 'required|string|numeric',
            'password' => 'required|string'
        ]);

        $response = Auth::login($request);

    //     if ($exception){
    //         return response()->json([
    //             'status' => 'failed',
    //             'error' => $exception->getMessage()
    //         ]);
    //    }

        // return response()->json(['error' => 'Error msg', $exception], 404);
        return response()->json(['error'=>'Done!', 'response' => $response], 404);
        // $validated = $request->validated();
        // return $validated;
    }
}
