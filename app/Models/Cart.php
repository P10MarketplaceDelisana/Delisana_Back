<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;
    protected $fillable = [
    // 'user_id', 
    'sales_bill_id', 
    'product_id', 
    'product_price'];

    // public function user()
    // {
    //     return $this->belongsTo(User::class);
    // }

    public function salesBill()
    {
        return $this->belongsTo(SaleBill::class,'sales_bill_id');
    }

    public function product()
    {
        return $this->belongsTo(Product::class,'product_id');
    }

}
