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
    <div class="container">
        <div class="row text-center">
            <h1>Our Upcoming Tours</h1>
        </div>
        <div class="row">
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
                        <h3 class="title"><a href="#">London</a></h3>
                        <div class="price">$5999.99</div>
                        <ul class="rating">
                            <li class="fa fa-star"></li>
                            <li class="fa fa-star"></li>
                            <li class="fa fa-star"></li>
                            <li class="fa fa-star"></li>
                            <li class="far fa-star"></li>
                            <li>(2)</li>
                        </ul>
                    
                        <a href="#" class="add-cart"><i class="fas fa-cart-plus"></i>Book Now</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="product-grid">
                    <div class="product-image">
                        <a href="#" class="image">
                            <img class="pic-1" src="{{ asset('uploads/tour3.jpg') }}">
                            <img class="pic-2" src="{{ asset('uploads/tour4.jpeg') }}">
                        </a>
                        <ul class="product-links">
                            <li><a href="#" data-tip="Add to Wishlist"><i class="fa fa-heart"></i></a></li>
                            <li><a href="#" data-tip="Compare"><i class="fa fa-random"></i></a></li>
                            <li><a href="#" data-tip="Quick View"><i class="fa fa-eye"></i></a></li>
                        </ul>
                    </div>
                    <div class="product-content">
                        <h3 class="title"><a href="#">Women's Top</a></h3>
                        <div class="price">$49.99</div>
                        <ul class="rating">
                            <li class="fa fa-star"></li>
                            <li class="fa fa-star"></li>
                            <li class="fa fa-star"></li>
                            <li class="far fa-star"></li>
                            <li class="far fa-star"></li>
                            <li>(3)</li>
                        </ul>
                        <a href="#" class="add-cart"><i class="fas fa-cart-plus"></i>Book Now</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="product-grid">
                    <div class="product-image">
                        <a href="#" class="image">
                            <img class="pic-1" src="{{ asset('uploads/tour5.jpg') }}">
                            <img class="pic-2" src="{{ asset('uploads/tour6.jpg') }}">
                        </a>
                        <ul class="product-links">
                            <li><a href="#" data-tip="Add to Wishlist"><i class="fa fa-heart"></i></a></li>
                            <li><a href="#" data-tip="Compare"><i class="fa fa-random"></i></a></li>
                            <li><a href="#" data-tip="Quick View"><i class="fa fa-eye"></i></a></li>
                        </ul>
                    </div>
                    <div class="product-content">
                        <h3 class="title"><a href="#">Men's Shirt</a></h3>
                        <div class="price">$69.99</div>
                        <ul class="rating">
                            <li class="fa fa-star"></li>
                            <li class="fa fa-star"></li>
                            <li class="fa fa-star"></li>
                            <li class="fa fa-star"></li>
                            <li class="fa fa-star"></li>
                            <li>(5)</li>
                        </ul>
                        <a href="#" class="add-cart"><i class="fas fa-cart-plus"></i>Add to cart</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="product-grid">
                    <div class="product-image">
                        <a href="#" class="image">
                            <img class="pic-1" src="{{ asset('uploads/tour7.jpg') }}">
                            <img class="pic-2" src="{{ asset('uploads/tour8.jpg') }}">
                        </a>
                        <ul class="product-links">
                            <li><a href="#" data-tip="Add to Wishlist"><i class="fa fa-heart"></i></a></li>
                            <li><a href="#" data-tip="Compare"><i class="fa fa-random"></i></a></li>
                            <li><a href="#" data-tip="Quick View"><i class="fa fa-eye"></i></a></li>
                        </ul>
                    </div>
                    <div class="product-content">
                        <h3 class="title"><a href="#">Women's T-Shirt</a></h3>
                        <div class="price">$29.99</div>
                        <ul class="rating">
                            <li class="fa fa-star"></li>
                            <li class="fa fa-star"></li>
                            <li class="fa fa-star"></li>
                            <li class="fa fa-star"></li>
                            <li class="far fa-star"></li>
                            <li>(4)</li>
                        </ul>
                        <a href="#" class="add-cart"><i class="fas fa-cart-plus"></i>Add to cart</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection






