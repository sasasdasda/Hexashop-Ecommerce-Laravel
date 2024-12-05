<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Symfony\Component\Uid\Uuid;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name',100);
            // $table->integer('userid',false,true);
            $table->tinyInteger('user_id',false,true);
            // $table->string('userid');
            $table->uuid('uuid')->default(Uuid::v6())->unique();
            $table->tinyInteger('category_id',false,true);
            $table->string('image',255);
            $table->integer('price');
            $table->tinyInteger('approve',false,true);
            $table->string('description',1000);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Schema::dropIfExists('products');
    }
};
