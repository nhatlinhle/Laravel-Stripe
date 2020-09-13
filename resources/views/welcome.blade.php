@extends('layouts.app')

@section('content')

    <div class="jumbotron jumbotron-fluid" style="background-image: url('/storage/background.jpg'); width:100%; height:100vh; object-fit: cover;">
        <div class="container text-center pt-5">
            <h1 class="display-4" style="top:40%;">Stripe Ecommerce</h1>
            <p class="lead mt-3">
                <a href="#shopItems" role="button" class="btn btn-primary btn-lg">Learn More</a>
            </p>
        </div>
    </div>

    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active" aria-current="page">Home</li>
            </ol>
        </nav>
    </div>

    <div class="container" id="shopItems">
        <h1 class="display-4 text-center">Laravel Ecommerce</h1>
        <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas vitae elementum nulla. Curabitur non fermentum nunc, a tempor elit. Donec at diam rutrum, porttitor arcu ut, pulvinar turpis. Morbi bibendum ex quis metus sodales accumsan. Donec in arcu blandit, sodales nibh nec, maximus odio. Integer fringilla est odio, quis aliquet purus porttitor sit amet.
        </p>
        <div class="row">
            @foreach($products as $product)
                <div class="col-3 my-5">
                    <a href="/shop/{{$product->slug}}"><img class="mx-auto d-block" height="100%" width="100%" src="/storage/image.jpg" alt="product"></a>
                    <a href="/shop/{{$product->slug}}"><div class="product-name">{{ $product->name }}</div></a>
                    <div class="product-price">{{ $product->presentPrice() }}</div>
                </div>
            @endforeach
        </div>
        <div class="row">
            <div class="col-12 text-center my-5">
                <a href="{{ route('shop.index')}}" role="button" class="btn btn-outline-secondary">View more products</a>
            </div>
        </div>
    </div>
@endsection