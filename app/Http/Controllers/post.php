<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class post extends Controller
{
    public function postindex(){
       // dd('postindex');
        return view('components.post.from');
    }
}
