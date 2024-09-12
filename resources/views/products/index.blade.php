@extends('layouts.main')
@section('title', 'Ecom | All Products')
@section('content')
<div class="py-5">
   <div class="container">
      <div class="row">
         <div class="col-md-12">
            <div class="card">

               <div class="card-header card-title">
                  <div class="d-flex align-items-center">
                     <h2 class="mb-0">All Products</h2>
                     <div class="ml-auto">
                        <a href="{{route('products.create')}}" class="btn btn-success">
                           <i class="fa fa-plus-circle mr-1"></i>
                           Add New
                        </a>
                     </div>
                  </div>
               </div>

               <div class="card-body">
                  @include('products._filter')
                  <table class="table table-striped table-hover">
                     <thead>
                        <tr>
                           <th scope="col">Id</th>
                           <th scope="col">Title</th>
                           <th scope="col">Price</th>
                           <th scope="col">Quantity</th>
                           <th scope="col">Description</th>
                           <th scope="col">Short Description</th>
                           <th scope="col"></th>
                        </tr>
                     </thead>
                     <tbody>
                        @include('layouts._message')
                        @if($products->count())
                           @foreach($products->sortBy('title') as $index => $product)
                              <tr>
                                 <th scope="row">{{$product->id}}</th>
                                 <td>{{$product->title}}</td>
                                 <td>&#163;{{$product->price}}</td>
                                 <td>{{$product->quantity}}</td>
                                 <td>{{$product->desc}}</td>
                                 <td>{{$product->short_desc}}</td>
                                 <td><img src="{{$product->productImage()}}" alt="{{$product->image}}" width="150"></td>
                                 <td width="150">
                                    <div class="d-flex align-items-center">
                                       <div>
                                          <a href="{{route('products.show', $product->id)}}" class="btn btn-sm btn-circle btn-outline-info" title="Show"><i class="fa fa-eye"></i></a>                                             
                                       </div>
                                       <div class="ml-1">
                                          <a href="{{route('products.edit', $product->id)}}" class="btn btn-sm btn-circle btn-outline-secondary" title="Edit"><i class="fa fa-edit"></i></a>
                                       </div>
                                       <div class="ml-1">
                                          <a href="{{route('products.destroy', $product->id)}}" class="btn btn-sm btn-circle btn-outline-danger btn-delete" title="Delete"><i class="fa fa-times"></i></a>
                                       </div>
                                    </div>
                                 </td>
                              </tr>
                           @endforeach
                           @include('layouts._delete-form')
                        @endif
                     </tbody>
                  </table> 
                  {{$products->withQueryString()->links()}}
               </div>

            </div>
         </div>
      </div>
   </div>
</div>
@endsection