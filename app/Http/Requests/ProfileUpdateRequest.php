<?php

namespace App\Http\Requests;

use Illuminate\Support\Facades\Storage;
use Illuminate\Foundation\Http\FormRequest;


class ProfileUpdateRequest extends FormRequest
{
   /*Determine if user is authorized to make this request*/
   public function authorize()
   {
      return true;
   }

   /*Get validation rules that apply to the request*/
   public function rules()
   {
      return[
         'first_name'      => ['required', 'string', 'max:255'],
         'last_name'       => ['required', 'string', 'max:255']
      ];
   }
   
   public function handleRequest()    
   {
      $profileData = $this->validated();

      return $profileData;
   }
}