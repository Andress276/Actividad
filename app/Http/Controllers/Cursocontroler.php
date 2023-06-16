<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Cursocontroler extends Controller{


    public function numerosAmigos()
    {
        $numero1 = 220;
        $numero2 = 284;

        if ($this->sonAmigos($numero1, $numero2)) {
            $mensaje = "$numero1 y $numero2 Son numeros amigos.";
        } else {
            $mensaje = "$numero1 y $numero2 No son numeros amigos.";
        }

        return $mensaje;
    }

    private function sonAmigos($numero1, $numero2)
    {
        $sumaDivisores1 = array_sum($this->encontrarDivisores($numero1));
        $sumaDivisores2 = array_sum($this->encontrarDivisores($numero2));

        return ($sumaDivisores1 == $numero2) && ($sumaDivisores2 == $numero1);
    }

    private function encontrarDivisores($numero)
    {
        $divisores = [];

        for ($i = 1; $i <= $numero / 2; $i++) {
            if ($numero % $i == 0) {
                $divisores[] = $i;
            }
        }

        return $divisores;
    }


}

