@extends('layouts.app')

@section('content')
<div class="container">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Shop</li>
        </ol>
    </nav>
</div>
<div class="container">
        <div class="row py-3">
            <div class="col-3 pt-5" id="sticky-sidebar">
                <div class="sticky-top">
                    <nav class="navbar navbar-light bg-light">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <p class="navbar-brand">By Category: </p>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">Laptop</a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">Desktops</a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">Mobile Phones</a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">Tablets</a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">Tvs</a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">Digital Cameras</a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">Appliances</a>
                            </li>
                        </ul>
                    </nav>
                    <nav class="navbar navbar-light bg-light">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <p class="navbar-brand">By Price: </p>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">£0-£700</a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">£700-£2500</a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">£2500+</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
            <div class="col" id="main">
                <h1>Products</h1>
                <div class="row">
                    @foreach($products as $product)
                        <div class="col-3 my-5">
                            <a href="/shop/{{$product->slug}}"><img class="mx-auto d-block" height="100%" width="100%" src="/storage/image.jpg" alt="product"></a>
                            <a href="/shop/{{$product->slug}}"><div class="product-name">{{ $product->name }}</div></a>
                            <div class="product-price">{{ $product->presentPrice() }}</div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
