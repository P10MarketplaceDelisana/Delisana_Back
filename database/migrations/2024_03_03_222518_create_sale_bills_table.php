<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    
    public function up(): void
    {
        Schema::create('sale_bills', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->float('total_price');
            $table->boolean('bill_status');
            $table->timestamps();
        
            $table->foreign('user_id')->references('id')->on('users');
        });
    }


    public function down(): void
    {
        Schema::dropIfExists('sale_bills');
    }
};
