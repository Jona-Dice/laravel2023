<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class productosController extends Controller
{
   public function index() {
    return view('productos');
    }

    public function mostrar() {
        echo "metodo mostrar";
    }

    public function crear() {
    return view("crear");
    }





}
class productosController1 extends Controller
{
    //public function dataformulario(Request $request) {
    public function dataformulario() {
        echo "metodo mostrar";
        //return $request->input('nombre');
    }
}

