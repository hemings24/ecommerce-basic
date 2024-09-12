<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Http\Requests\ProductRequest;
use Illuminate\Http\Request;


class ProductController extends Controller
{
   public function __construct()
   {
      $this->middleware(['auth','verified'])->except(['index','show']);
   }

   public function index()
   { 
      $products = Product::latest()->paginate(10);

      return view('products.index', compact('products'));
   }

   public function show(Product $product)
   {
      return view('products.show', compact('product'));
   }

   public function create()
   {
      $product = new Product;

      return view('products.create', compact('product'));
   }

   public function store(ProductRequest $request, Product $product)
   {
      $productData = $request->validateForm($product);

      $product = $product->create($productData);
      $request->addImage($product);

      return redirect()->route('products.index')->with('success', "Product has been added");
   }
         
   public function edit(Product $product)
   {
      return view('products.edit', compact('product'));
   }
   
   public function update(ProductRequest $request, Product $product)
   { 
      $productData = $request->validateForm($product);

      $product->update($productData);
      $request->updateImage($product);

      return redirect()->route('products.index')->with('success', "Product has been updated");
   }
   
   public function destroy(Product $product)
   {
      $request = new ProductRequest;
      $request->deleteImage($product->image_name.$product->image_type);
      $product->delete();

      return redirect()->route('products.index')->with('success', "Product has been removed");
   }
}