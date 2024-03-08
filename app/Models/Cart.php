<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Cart extends Model
{
    use HasFactory;
    protected $fillable = [
    'sales_bill_id', 
    'product_id', 
    'product_price',
    'number',
     ];

  

    public function salesBill(): BelongsTo
    {
        return $this->belongsTo(SaleBill::class,'sales_bill_id');
    }

    public function product(): BelongsTo
    {
        return $this->belongsTo(Product::class,'product_id');
    }

}
