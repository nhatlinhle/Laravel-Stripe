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
                            @foreach($categories as $category)
                                <li class="nav-item {{  setActiveCategory($category->slug) }}">
                                    <a href="{{ route('shop.index', ['category' => $category->slug]) }}" class="nav-link">{{$category->name}}</a>
                                </li>
                            @endforeach
                        </ul>
                    </nav>
                    <!-- <nav class="navbar navbar-light bg-light">
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
                    </nav> -->
                </div>
            </div>
            <div class="col" id="main">
                <div class="d-flex justify-content-between">
                    <h1>{{$categoryName}}</h1>
                    <div class="price-range">
                        <strong>Price: </strong>
                        <a href="{{ route('shop.index', ['category'=>request()->category, 'sort' => 'low_high']) }}">Low to High</a> | 
                        <a href="{{ route('shop.index', ['category'=>request()->category, 'sort' => 'high_low']) }}">High to Low</a>
                    </div>
                </div>
                <div class="row">
                    @forelse($products as $product)
                        <div class="col-4 my-5">
                            <a href="/shop/{{$product->slug}}"><img class="mx-auto d-block" height="100%" width="100%" src="/storage/{{$product->slug}}.jpg" alt="product"></a>
                            <a href="/shop/{{$product->slug}}"><div class="product-name">{{ $product->name }}</div></a>
                            <div class="product-price">{{ $product->presentPrice() }}</div>
                        </div>
                    @empty
                        <div class="py-5">
                            <h3>
                                No Items Found
                            </h3>
                        </div>
                    @endforelse
                </div>
                <div class="row">
                    <div class="col-12 d-flex justify-content-center">
                        {{ $products->appends(request()->input())->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
