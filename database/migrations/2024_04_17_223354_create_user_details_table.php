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
        Schema::create('user_details', function (Blueprint $table) {
            $table->id();
            $table->string      ('country','100')       ->nullable();
            $table->string      ('firstname',255)       ->nullable();
            $table->string      ('lastname',255)        ->nullable();
            $table->tinyInteger ('status',0,true)       ->default(0)->comment('0 mean is customer 1 mean is seller')->nullable();
            $table->string      ('email_work',255)      ->nullable();
            $table->string      ('phone',20)            ->nullable();
            $table->string      ('store_location',255)  ->nullable();
            $table->string      ('about',1000)          ->nullable();
            $table->string      ('profile_image',500)   ->nullable();
            $table->tinyInteger ('rate',0,true)         ->default(0)->comment('0 mean is not verfied 1 mean is verfied 2 mean is verfied pro');
            $table->tinyInteger ('user_id',0,1);
            $table->unique      ('user_id');
            $table->timestamps  ();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_details');
    }
};
