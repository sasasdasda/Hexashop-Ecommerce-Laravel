<?php

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
        Schema::create('cart', function (Blueprint $table) {
            $table->id();
            $table->char('product_id',36);
            $table->integer('total_price',false,true);
            $table->tinyInteger('vendor_id' ,false,true);
            $table->integer('quantity',false,true);
            $table->tinyInteger('user_id'   ,false,true);
            $table->tinyInteger('paid',false,true)->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cart');
    }
};
