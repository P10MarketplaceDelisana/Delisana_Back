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

    public function store(Request $request){
        $validatedData = $request->validate([
            'category' => 'required|string|max:255',
        ]);
    
        // Utilizando el método create para crear y guardar el nuevo modelo
        $category = Category::create([
            'category' => $validatedData['category'],
        ]);
    
        // Puedes hacer algo con el modelo creado, si es necesario
    }

}
