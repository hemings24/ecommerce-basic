<?php

namespace App\Http\Requests;

use App\Models\Product;
use Illuminate\Support\Facades\File;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;


class ProductRequest extends FormRequest
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
         'title'      => ['required', 'string', 'max:255'],
         'price'      => ['required', 'numeric'],
         'quantity'   => ['required', 'integer'],
         'desc'       => ['required', 'string'],
         'short_desc' => ['required', 'string'],
         'image'      => ['nullable', 'mimes:jpeg,bmp,png']
      ];
   }

   
   public function validateForm(Product $product)
   {
      $productData = $this->validated();

      return $productData;
   }

   public function addImage(Product $product)
   {      
      if($this->hasFile('image'))
      {
         $image = $this->image;
         $imageName = $product->id." - ".$product->title;
         $imageType = ".".$image->getClientOriginalExtension();

         $image->move('assets/img/products/',$imageName.$imageType);

         $this->saveImage($product,$imageName,$imageType);
      }
   }

   public function updateImage(Product $product)
   {
      $fileNameOld = $product->image_name.$product->image_type;

      $imageNameNew = $product->id." - ".$product->title;
      $imageTypeNew = $product->image_type;
      $fileNameNew = $imageNameNew.$imageTypeNew;
      
      if($this->hasFile('image'))
      {
         $image = $this->image;
         $imageTypeNew = ".".$image->getClientOriginalExtension();
         $fileNameNew = $imageNameNew.$imageTypeNew;

         $this->deleteImage($fileNameOld);
         
         $image->move('assets/img/products/',$fileNameNew);
      }
      else
      {
         File::move(public_path('assets/img/products/'.$fileNameOld), public_path('assets/img/products/'.$fileNameNew));
      }

      $this->saveImage($product,$imageNameNew,$imageTypeNew);
   }

   public function deleteImage($fileName)
   {
      $filePath = "assets/img/products/".$fileName;
      
      if(File::exists($filePath))
      {
         File::delete($filePath);
      }
   }

   public function saveImage(Product $product, $imageName, $imageType)
   {
      $product->image_name = $imageName;
      $product->image_type = $imageType;
      
      $product->save();
   } 
}