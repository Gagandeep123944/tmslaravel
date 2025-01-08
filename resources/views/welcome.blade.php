@push('css')
    <link rel="stylesheet" href="{{ asset('css/product.css') }}">
@endpush
@extends('layouts.main')

@section('title')
Home
@endsection

@push('css')
    <link rel="stylesheet" href="https://codepen.io/piyush-608/pen/azoZENE">
@endpush

@section('content')
@php
    $productArray = json_decode($products, true); // Decodes JSON string into an associative array
@endphp



    <div class="container">
        <div class="row text-center">
            <h1>Our Upcoming Tours</h1>
        </div>
        <div class="row">
            @foreach ($productArray as $product)

                <div class="col-md-3 col-sm-6">
                    <div class="product-grid">
                        <div class="product-image">
                            <a href="#" class="image">
                                <img class="pic-1" src="{{ asset('uploads/tour1.jpg') }}">
                                <img class="pic-2" src="{{ asset('uploads/tour2.webp') }}">
                            </a>
                            <ul class="product-links">
                                <li><a href="#" data-tip="Add to Wishlist"><i class="fa fa-heart"></i></a></li>
                                <li><a href="#" data-tip="Compare"><i class="fa fa-random"></i></a></li>
                                <li><a href="#" data-tip="Quick View"><i class="fa fa-eye"></i></a></li>
                            </ul>
                        </div>
                        <div class="product-content">
                            <h3 class="title"><a href="#">{{ $product['location'] }}</a></h3>
                            <div class="price">{{ $product['Tour_price'] }}</div>
                            <ul class="rating">
                                <li class="fa fa-star"></li>
                                <li class="fa fa-star"></li>
                                <li class="fa fa-star"></li>
                                <li class="fa fa-star"></li>
                                <li class="far fa-star"></li>
                                <li>(2)</li>
                            </ul>
                        
                            <a href="#" class="add-cart" data-bookId="{{ $product['id'] }}"><i class="fas fa-cart-plus"></i>Book Now</a>
                        </div>
                    </div>
                </div>


             @endforeach
        </div>
    </div>

@endsection






