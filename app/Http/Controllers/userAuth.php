<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class userAuth extends Controller
{
    public function userLogin (Request $req){
        // return $req->input();
        $data = $req->input('user');
        $req->session()->put('user',$data);
        // echo session('user');
        return redirect ('profile');
    }
}
