<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AritmeticaController extends Controller
{
    public function Sumar($num1, $num2)
    {
        $num3 = $num1 + $num2;
        return "$num1 + $num2 = $num3";
    }
}
