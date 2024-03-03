<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'image',
        'description',
        'category_id',
        'intolerance_id',
        'price', 
        
    ];

    public function category():BelongsTo{
        return $this->belongsTo(Category::class, 'category_id');
    }

    public function intolerances(){
        return $this->belongsToMany(Intolerance::class, 'intolerances_products', 'product_id', 'intolerance_id');
    }

    public function getIntoleranceAttribute(){
        return $this->intolerances->pluck('name')->toArray();
    }
}
