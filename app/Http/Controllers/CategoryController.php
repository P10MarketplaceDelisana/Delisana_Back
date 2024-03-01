<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{

    public function index(){
        $categories= Category::all();
        return $categories;
    }
    
    public function show($id){
        $categories= Category::find($id);
        return $categories;
    }

}
