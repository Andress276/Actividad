<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ParesController extends Controller
{

    public function ParImpar ($numero1, $numero2)
{
    if ($numero1 % 2 == 0 && $numero2 % 2 == 0) {
        return "Ambos numeros son pares";
    } elseif ($numero1 % 2 == 1 && $numero2 % 2 == 1) {
        return "Ambos numeros son impares";
    } else {
        return "Los numeros son diferentes: uno es par y el otro es impar";
    }
}

  
}
