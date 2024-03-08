<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'image',
        'public_id',
        'description',
        'category_id',
        'price', 
        
    ];

    public function category():BelongsTo{
        return $this->belongsTo(Category::class, 'category_id');
    }

    public function intolerances(): BelongsToMany
    {
        return $this->belongsToMany(Intolerance::class, 'intolerances_products', 'product_id', 'intolerance_id');
    }

    public function getIntoleranceAttribute(){
        return $this->intolerances->pluck('name')->toArray();
    }


    public function carts(): BelongsToMany
    {
        return $this->belongsToMany(SaleBill::class, 'carts', 'product_id', 'sales_bill_id')
                    ->withPivot('product_price', 'number');
    }
    
}
