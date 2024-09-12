<?php

namespace App\Models;

use App\Scopes\SearchScope;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Product extends Model
{
   use HasFactory;
   protected $fillable = ['title','price','quantity','desc','short_desc','image_name','image_type'];
   public $searchColumns = ['title','price','desc','short_desc'];

   
   public function user()
   {
      return $this->belongsTo(User::class);
   }

   public function order()
   {
      return $this->belongsTo(Order::class);
   }

   public static function userProducts()
   {
      return self::withoutGlobalScope(SearchScope::class)
      ->where('id',auth()->id())
      ->orderBy('title')
      ->pluck('title','id')
      ->prepend('All Products','');
   }

   public static function booted()
   {
      static::addGlobalScope(new SearchScope);
   }

   public function productImage()
   {
      return $this->image_name != null ? asset('assets/img/products/'.$this->image_name.$this->image_type) : asset('assets/img/no-image.png');
   }
}