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
        Schema::create('comments', function (Blueprint $table) {
            $table->id();
            $table->string('comment',1000);
            $table->tinyInteger('user_id',false,true);
            $table->tinyInteger('comment_in',false ,true)->comment('Post Or product the Comment In It');
            $table->tinyInteger('category_id',false,true)->comment('category id Like post Or product');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('comments');
    }
};
