<?php

namespace App\Http\Controllers;
use App\DssKost;

use Illuminate\Http\Request;

class weightProductController extends Controller
{
    public function show(){
        return view('user');
    }
    public function calculate(){
        DssKost::get();
    }
}
