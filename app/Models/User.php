<?php

namespace App\Models;

use Laravel\Sanctum\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;


class User extends Authenticatable implements MustVerifyEmail
{
   use HasApiTokens,HasFactory,Notifiable;

   protected $fillable = [
      'first_name',
      'last_name',
      'email',
      'password',
      'account'
   ];

   protected $hidden = [
      'password',
      'remember_token',
   ];

   protected $casts = [
      'email_verified_at' => 'datetime',
   ];


   public function products()
   {
      return $this->hasMany(Product::class);
   }

   public function orders()
   {
      return $this->hasMany(Order::class);
   }

   public function fullName()
   {        
      return $this->first_name." ".$this->last_name;
   }
}