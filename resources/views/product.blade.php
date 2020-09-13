@extends('layouts.app')

@section('content')
    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/">Home</a></li>
                <li class="breadcrumb-item"><a href="/shop">Shop</a></li>
                <li class="breadcrumb-item active" aria-current="page">{{$product->name}}</li>
            </ol>
        </nav>
    </div>

    <div class="container">
        <div class="row my-5">
            <div class="col-6">
                <img class="border rounded" src="/storage/image.jpg" alt="product" height="100%" width="100%">
            </div>
            <div class="col-4 offset-2">
                <h1 class="mb-5"><strong>{{ $product->name }}</strong></h1>

                <p class="text-secondary" style="font-size: 18px;opacity:0.7;"><strong>{{ $product->details }}</strong></p>
                <p style="font-size:24px;"><strong>{{ $product->presentPrice() }}</strong></p>
                <p style="font-size: 15px;">{{ $product->description }}</p>

                <!-- <a href="#" style="font-size:24px;" role="button" class="btn btn-outline-secondary">Add to Cart</a> -->
                <form action="{{route('cart.store')}}" method="POST">
                    {{csrf_field()}}
                    <input type="hidden" name="id" value="{{ $product->id }}">
                    <input type="hidden" name="name" value="{{ $product->name }}">
                    <input type="hidden" name="price" value="{{ $product->price }}">
                    <button type="submit" name="Submit" class="btn btn-outline-secondary">Add to Cart</button>
                </form>
            </div>
        </div>
    </div>

    <div class="container">
        @include('partials.might-like')
    </div>
@endsection