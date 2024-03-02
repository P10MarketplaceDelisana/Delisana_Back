<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\IntoleranceProduct;

class Intolerance extends Model
{
    use HasFactory;
    protected $fillable = [
        'intolerance',
    ];

    public function intolerances_products()

    {
        return $this->hasMany(IntoleranceProduct::class, 'intolerance_id');
    } 

    public function products()
    {
        return $this->belongsToMany(Product::class, 'intolerances_products');
    }



}
