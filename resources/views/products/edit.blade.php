@extends('layouts.main')
@section('title', 'Products | Edit Product')
@section('content')
<div class="py-5">
   <div class="container">
      <div class="row justify-content-md-center">
         <div class="col-md-8">
            <div class="card">

               <div class="card-header card-title">
                  <strong>Edit Product</strong>
               </div>

               <div class="card-body">
                  <form action="{{route('products.update',$product->id)}}" method="POST" enctype="multipart/form-data">
                     @method('PUT')
                     @csrf
                     @include('products._form')
                  </form>
               </div>

            </div>
         </div>
      </div>
   </div>
</div>
@endsection