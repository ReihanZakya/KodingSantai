<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ThemesController extends Controller
{
    function show(){
        return view('tema');
    }

    function showMateri(){
        return view('materi');
    }
}
