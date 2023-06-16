<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrimosController extends Controller
{
    
    public function Primos($numero1)
{
    $resultado1 = $this->esPrimo($numero1) ? "$numero1 Es un numero primo." : "$numero1 No es un numero primo.";

    return $resultado1;
}

private function esPrimo($numero)
{
    if ($numero <= 1) {
        return false;
    }

    for ($i = 2; $i <= sqrt($numero); $i++) {
        if ($numero % $i == 0) {
            return false;
        }
    }

    return true;
}



}
