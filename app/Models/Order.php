<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Order extends Model
{
   use HasFactory;
   protected $fillable = ['total','sub_total','shipping','currency','transaction','status'];


   public function products()
   {
      return $this->hasMany(Product::class);
   }

   public function user()
   {
      return $this->belongsTo(User::class);
   }
}