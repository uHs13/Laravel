<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MathController extends Controller
{
    public function add(int $n1, int $n2): float
    {
        return $n1 + $n2;
    }
}