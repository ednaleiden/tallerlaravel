<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;


class PaginasController extends Controller
{

   
    public function contacto(){
       //return "Texto contacto desde el controlador";
       return view('contacto');
    }
   
}