<?php

use App\Models\SaleBill;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('carts', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('sales_bill_id')->nullable();
            $table->unsignedBigInteger('product_id');
            $table->float('product_price', 8, 2);
            $table->timestamps();
            
            $table->foreign('sales_bill_id')->references('id')->on('sale_bills');
            $table->foreign('product_id')->references('id')->on('products');
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('carts');
    }
};
