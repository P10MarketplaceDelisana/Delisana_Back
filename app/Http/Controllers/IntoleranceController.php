<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IntoleranceController extends Controller
{

    public function index(){
        $intolerances= Intolerance::all();
        return $intolerances;
    }
    




}
