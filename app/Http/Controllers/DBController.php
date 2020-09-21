<?php

namespace App\Http\Controllers;

use App\Models\Modelos;
use Illuminate\Http\Request;

class DBController extends Controller
{
    public function vista(){
        return view('home');
    }  
}