<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\mal;

class malController extends Controller
{
    public function mostrarVirus(){
        $viru=mal::all();
        return view('index',['virus'=>$viru]);


    }





}
