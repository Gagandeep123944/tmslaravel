@extends('layouts.dashboardmain')

@section('title')
 Upload Products 
@endsection

@section('Name')
{{ $name }}
@endsection

@section('welcome')
{{ $name }}
@endsection


@section('content')
<div class="container">
<form id="product_upload"  method="POST" enctype="multipart/form-data" class="product_upload" style="margin:50px" data-action="{{ route('PrdocutUpData') }}">
    @csrf
  <h1>Upload Products</h1>  
  <div class="form-group">
    <label for="product_name">Location</label>
    <input type="text" name="location" class="form-control" id="product_name"  placeholder="Enter Tour location">
    <span id="error_product_name" class="text-danger"></span>
  </div>

  <div class="form-group">
    <label for="Tour_price">Tour Price</label>
    <input type="text" name="Tour_price" class="form-control" id="Tour_price"  placeholder="Enter Tour Price">
    <span id="error_total_price" class="text-danger"></span>
  </div>
 
  <div class="form-group">
    <label for="Tour_price">Review</label>
     <select type="text" name="Review" class="form-control" id="Review">
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
     </select>
</div>

  <div class="form-group">
    <label for="product_image">Product Image</label>
    <input type="file" name="product_image" class="form-control" id="product_image" >
  </div>

  
  <button type="submit" class="btn btn-primary">Create Product</button>
</div>

</form>

<script src="{{ asset('js/admin.js') }}"></script>
@endsection