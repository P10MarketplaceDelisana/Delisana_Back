<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Intolerance;

class IntoleranceProduct extends Model
{
    use HasFactory;

    protected $table = 'intolerance_products';

    protected $fillable = [
        'product_id',
        'intolerance_id',
    ];

    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id');
    }

    public function intolerance()
    {
        return $this->belongsTo(Intolerance::class, 'intolerance_id');
    }
}

