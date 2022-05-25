<?php

namespace App\Http\Controllers;

use App\Models\Pet;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function mascotas(){
        $mascotas = Pet::all();
        return view('mascotas',compact('mascotas'));
    }
    public function servicios(){
        return view('servicios');
    }
    public function veterinarios(){
        return view('veterinarios');
    }
    public function contacto(){
        return view('contacto');
    }
}
