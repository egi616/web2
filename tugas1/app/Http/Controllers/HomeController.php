<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //fungsi index yang dari 
    public function home(){
        return view('home');
    }
}
