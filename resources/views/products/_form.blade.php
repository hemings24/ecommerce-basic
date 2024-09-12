<div class="row">
   <div class="col-md-12">

      <div class="form-group row">
         <label for="title" class="col-md-3 col-form-label">Title</label>
         <div class="col-md-9">
            <input type="text" name="title" value="{{old('title',$product->title)}}" id="title" class="form-control @error('title') is-invalid @enderror">
            @error('title')
               <div class="invalid-feedback">
                  {{$message}}
               </div>
            @enderror
         </div>
      </div>
      
      <div class="form-group row">
         <label for="price" class="col-md-3 col-form-label">Price &#163;</label>
         <div class="col-md-9">
            <input type="text" name="price" value="{{old('price',$product->price)}}" id="price" class="form-control @error('price') is-invalid @enderror">
            @error('price')
               <div class="invalid-feedback">
                  {{$message}}
               </div>
            @enderror
         </div>
      </div>
      
      <div class="form-group row">
         <label for="quantity" class="col-md-3 col-form-label">Quantity</label>
         <div class="col-md-9">
            <input type="text" name="quantity" value="{{old('quantity',$product->quantity)}}" id="quantity" class="form-control @error('quantity') is-invalid @enderror">
            @error('quantity')
               <div class="invalid-feedback">
                  {{$message}}
               </div>
            @enderror
         </div>
      </div>
      
      <div class="form-group row">
         <label for="desc" class="col-md-3 col-form-label">Description</label>
         <div class="col-md-9">
            <textarea name="desc" id="desc" rows="3" class="form-control @error('desc') is-invalid @enderror">{{old('desc',$product->desc)}}</textarea>
            @error('desc')
               <div class="invalid-feedback">
                  {{$message}}
               </div>
            @enderror
         </div>
      </div>
      
      <div class="form-group row">
         <label for="short_desc" class="col-md-3 col-form-label">Short Description</label>
         <div class="col-md-9">
            <textarea name="short_desc" id="short_desc" rows="3" class="form-control @error('short_desc') is-invalid @enderror">{{old('short_desc',$product->short_desc)}}</textarea>
            @error('short_desc')
               <div class="invalid-feedback">
                  {{$message}}
               </div>
            @enderror
         </div>
      </div>

      <div class="form-group row">
         <label for="image" class="col-md-3 col-form-label"></label>
         <div class="col-md-9">
            <div class="fileinput fileinput-new" data-provides="fileinput">
               <div class="fileinput-new img-thumbnail">
                  <img src="{{$product->productImage()}}" alt="{{$product->image}}" width="300">
               </div>
               <div class="fileinput-preview fileinput-exists img-thumbnail" style="max-width:300px"></div>
               <div class="mt-2">
                  <span class="btn btn-outline-secondary btn-file">
                  <span class="fileinput-new">Select image</span>
                  <span class="fileinput-exists">Change</span>
                  <input name="image" type="file" accept="image/*">
                  </span>
                  <a href="#" class="btn btn-outline-secondary fileinput-exists" data-dismiss="fileinput">Remove</a>
               </div>
            </div>
            @error('image')
               <span class="invalid-feedback">{{$message}}</span>
            @enderror
         </div>
      </div>

      <hr>
      <div class="form-group row mb-0">
         <div class="col-md-9 offset-md-3">
            <button type="submit" class="btn btn-primary">{{$product->exists ? 'Update' : 'Save'}}</button>
            <a href="{{route('products.index')}}" class="btn btn-outline-secondary">Cancel</a>
         </div>
      </div>
      
   </div>
</div>

@section('styles')
<link href="{{asset('css/jasny-bootstrap.min.css')}}" rel="stylesheet">
@endsection
@section('scripts')
<script src="{{asset('js/jasny-bootstrap.min.js')}}"></script>
@endsection