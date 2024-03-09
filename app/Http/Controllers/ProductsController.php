<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Exception;
use App\Models\Product;
use CloudinaryLabs\CloudinaryLaravel\Facades\Cloudinary;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;

class ProductsController extends Controller
{
    public function index()
    {
        try {
            $products = Product::all();
            return response()->json(['status' => 200, 'data' => $products]);
        } catch (Exception $e) {
            return response()->json(['status' => 204, 'message' => $e->getMessage()], 204);
        }
    }

    public function show($id)
    {
        
            // $product = Product::with('intolerances')->find($id);
            // if($product){
            //     $intolerancesIds = $product->intolerances->pluck('id')->toArray();
            //     return response()->json(['intolerances'=>$intolerancesIds], 200);
            // }else{
            // return response()->json(['error'=>'producto no encontrado'], 404);
            // }

        
        $product = Product::with('intolerances')->find($id);

        if ($product) {
            return response()->json(['product' => $product], 200);
        } else {
            return response()->json(['error' => 'Producto no encontrado'], 404);
        }

    }



    public function store(Request $request)
    {
        try{
            // $validatedData = Validator::make($request->all(), [
            //     'name' => 'required|string|max:255',
            //     'image' => 'required|image', // Valida imagen valida
            //     'description' => 'required|string',
            //     'category_id' => 'required|integer',
            //     'price' => 'required|numeric',
            //     'intolerances' => 'array', // Valida que sea un array
            //     'intolerances.*' => 'integer', // Valida que cada elemento del array sea un número entero
            // ]);

            // if ($validatedData->fails()) {
            //     throw new ValidationException($validatedData);
            // }

         // subir imagen a cloudinary   
        // dd($request);
              $file = $request->file('image');

              if (!$file) {
                return response()->json(['error' => 'No se ha enviado ningún archivo'], 400);
            }    

              $obj = Cloudinary::upload($file->getRealPath(),['folder'=>'products']);
              $public_id = $obj->getPublicId();
              $url = $obj->getSecurePath();

            if (!$url) {
                throw new \Exception('No se pudo subir la imagen a Cloudinary');
            }

         // graba en la base de datos       
        Product::create([
            "name"=>$request->name,
            "image_url"=>$url,
            "public_id"=>$public_id,
            "category_id"=>$request->category_id,
            "description"=>$request->description,
            "price"=>$request->price,
        ]);

        } catch  (ValidationException $e) {
            // Capturar excepciones de validación y manejarlas de manera apropiada
            return back()->withErrors($e->validator)->withInput(); // no es return back
        }
        // } catch (\Exception $e) {
        //         // Capturar excepciones de validación y manejarlas de manera apropiada
        //         return back()->withErrors($e->$validatedData)->withInput();
        // }

    }

    // public function upload_img(Request $request) {
    //     $file = $request->file('image');

    //     if (!$file) {
    //         return response()->json(['error' => 'No se ha enviado ningún archivo'], 400);
    //     }    

    //           $obj = Cloudinary::upload($file->getRealPath(),['folder'=>'products']);
    //           $public_id = $obj->getPublicId();
    //           $url = $obj->getSecurePath();

    //           return [
    //             'url' => $url,
    //             'public_id' => $public_id,
    //         ];

    // }

}
