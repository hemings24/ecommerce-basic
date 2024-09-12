<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;


return new class extends Migration
{
   public function up()
   {
      Schema::create('orders', function(Blueprint $table){
         $table->id();
         $table->decimal('total', $precision=10,$scale=2);
         $table->decimal('sub_total', $precision=10,$scale=2);
         $table->decimal('shipping', $precision=10,$scale=2);
         $table->string('currency');
         $table->string('transaction');
         $table->string('status');  
         $table->timestamps();
      });
   }
   
   public function down()
   {
      Schema::dropIfExists('orders');
   }
};