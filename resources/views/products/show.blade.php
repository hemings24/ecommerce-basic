@extends('layouts.main')
@section('title', 'Ecom | Product Details')
@section('content')
<div class="py-5">
   <div class="container">
      <div class="row justify-content-md-center">
         <div class="col-md-8">
            <div class="card">

               <div class="card-header card-title">
                  <strong>Product Details</strong>
               </div>

               <div class="card-body">
                  <div class="row">
                     <div class="col-md-12">
                        <div class="form-group row">
                           <label for="title" class="col-md-3 col-form-label">Title</label>
                           <div class="col-md-9">
                              <p class="form-control-plaintext text-muted">{{$product->title}}</p>
                           </div>
                        </div>
                        <div class="form-group row">
                           <label for="price" class="col-md-3 col-form-label">Price</label>
                           <div class="col-md-9">
                              <p class="form-control-plaintext text-muted">&#163;{{$product->price}}</p>
                           </div>
                        </div>
                        <div class="form-group row">
                           <label for="quantity" class="col-md-3 col-form-label">Quantity</label>
                           <div class="col-md-9">
                              <p class="form-control-plaintext text-muted">{{$product->quantity}}</p>
                           </div>
                        </div>
                        <div class="form-group row">
                           <label for="desc" class="col-md-3 col-form-label">Description</label>
                           <div class="col-md-9">
                              <p class="form-control-plaintext text-muted">{{$product->desc}}</p>
                           </div>
                        </div>
                        <div class="form-group row">
                           <label for="short_desc" class="col-md-3 col-form-label">Short Description</label>
                           <div class="col-md-9">
                              <p class="form-control-plaintext text-muted">{{$product->short_desc}}</p>
                           </div>
                        </div>
                        <div class="form-group row">
                           <label for="image" class="col-md-3 col-form-label"></label>
                           <div class="col-md-9">
                              <p class="form-control-plaintext text-muted">
                                 <img src="{{$product->productImage()}}" alt="{{$product->image}}" width="300">
                              </p>
                           </div>
                        </div>
                        <hr>
                        <div class="form-group row mb-0">
                           <div class="col-md-9 offset-md-3">
                              <div class="d-flex align-items-center">
                                 <div>
                                    <a href="{{route('products.edit', $product->id)}}" class="btn btn-info">Edit</a>
                                 </div>
                                 <div class="ml-1">
                                    <a href="{{route('products.destroy', $product->id)}}" class="btn-delete btn btn-outline-danger">Delete</a>
                                 </div>
                                 <div class="ml-1">
                                    <a href="{{route('products.index')}}" class="btn btn-outline-secondary">Back</a>
                                 </div>
                              </div>
                           </div>
                           @include('layouts._delete-form')
                        </div>
                     </div>
                  </div>
               </div>
               
            </div>
         </div>
      </div>
   </div>
</div>
@endsection