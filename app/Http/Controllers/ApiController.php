<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\mal;

class ApiController extends Controller
{
    public function apiBored()
    {
        $info=mal::all();
        $client = new \GuzzleHttp\Client();
        $response = $client->request('GET', 'http://www.boredapi.com/api/activity?participants=1');
        $json = $response->getBody();
        $info = json_decode($json, true);


        return index('info',['virus'=>$info]);
    }


public function mal(){
     $tabla = new mal();
}

    public function InicioRoute(){
        return view('index', ['info' => $this->apiBored()]);
    }

    public function GenericRoute(){
        return view('generic');
    }
    
    public function ElementsRoute(){
        return view('elements', ['info' => $this->apiBored()]);
    }

}
