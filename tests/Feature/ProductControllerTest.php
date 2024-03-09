<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Http\Controllers\ProductController;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\UploadedFile;
use CloudinaryLabs\CloudinaryLaravel\Facades\Cloudinary;

class ProductControllerTest extends TestCase
{

    //FUNCIONA
    // public function test_Product_Controller_conect_with_Cloudinary()
    // {
    //     //ARRANGE prepara datos de entrada
    //     $filePath = 'public/imgTest.jpg';
    //     $file = new UploadedFile($filePath, 'image.jpg', 'image/jpeg', null, true);

    //     // ACT realiza accion 
    //     $response = $this->post('/api/products', ['imagen' => $file]);

    //     // ASSERT verifica resultados
    //     $response->assertStatus(200);  // esperamos status 200 a cloudinary

    //     $responseData = $response->json(); 
    //     $this->assertArrayHasKey('url', $responseData); //esperamos que response data tenga el valor url

    //     $url = $responseData['url'];  // esperamos que response data url no sea vacio
    //     $this->assertNotEmpty($url);

    // }


   public function test_Product_Controller_store()
    {
        //ARRANGE prepara datos de entrada
        $filePath = 'public/imgTest.jpg';
        $file = new UploadedFile($filePath, 'image.jpg', 'image/jpeg', null, true);

        $data= [
            "name"=> "nombreimagen",
            "image"=> $file ,
            "description"=> "descripcion",
            "category_id"=> 2,
            "intolerance_id"=> 2,
            "price"=> 2.5
        ]
       

        // ACT realiza accion 
        $response = $this->post('/api/products', [
            "name"=> "nombreimagen",
            "image"=> $file ,
            "description"=> "descripcion",
            "category_id"=> 2,
            "intolerance_id"=> 2,
            "price"=> 2.5
        ];
        

        // ASSERT verifica resultados
        $response->assertStatus(200);  // esperamos status 200 de la bd

  
        $this->assertArrayHasKey('url', $responseData); //esperamos que consulte en la bd que existe 

        $url = $responseData['url'];  // esperamos que response data url no sea vacio
        $this->assertNotEmpty($url);

    }

}
