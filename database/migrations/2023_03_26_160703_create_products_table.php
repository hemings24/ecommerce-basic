<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;


return new class extends Migration
{
   public function up()
   {
      Schema::create('products', function(Blueprint $table){
         $table->id();
         $table->string('title');
         $table->decimal('price', $precision=10,$scale=2);
         $table->integer('quantity');
         $table->text('desc');
         $table->text('short_desc');
         $table->string('image_name')->nullable();
         $table->string('image_type')->nullable();       
         $table->timestamps();
      });
   }

   public function down()
   {
      Schema::dropIfExists('products');
   }
};