<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Intolerance;

class IntoleranceController extends Controller
{

    public function index(){
        $intolerances= Intolerance::all();
        return $intolerances;
    }

    public function show($id){
        $intolerances= Intolerance::find($id);
        return $intolerances;
    }

}
