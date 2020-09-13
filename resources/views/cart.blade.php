@extends('layouts.app')

@section('content')
    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/">Home</a></li>
                <li class="breadcrumb-item"><a href="/shop">Shop</a></li>
                <li class="breadcrumb-item active" aria-current="page">Cart</li>
            </ol>
        </nav>
    </div>
    <div class="container cart-section">
        @if(session()->has('success'))
            <div class="alert alert-success">
                {{ session()->get('success') }}
            </div>
        @endif
        @if(session()->has('info'))
            <div class="alert alert-info">
                {{ session()->get('info') }}
            </div>
        @endif
        @if(session()->has('error'))
            <div class="alert alert-danger">
                {{ session()->get('error') }}
            </div>
        @endif

        @if(Cart::count() > 0)
            <div>
                <h2>{{ Cart::count() }} item(s) in Shopping Cart</h2>
                    
                <div class="row my-5">
                    <div class="col-8">
                        @foreach(Cart::content() as $item)
                            <div class="row border-top border-bottom border-dark py-2">
                                <div class="col-4">
                                    <a href="{{ route('shop.show', $item->model->slug) }}" alt="product"><img src="/storage/image.jpg" alt="Product" width="100%" height="100%"></a>
                                </div>
                                <div class="col-3 my-5">
                                    <div class="details">
                                        <p><a style="color:black;text-decoration:none;font-size:22px;" href="{{ route('shop.show', $item->model->slug) }}">{{ $item->model->name }}</a></p>
                                        <p class="text-secondary font-italic" style="opacity:0.6;">{{ $item->model->details }}</p>
                                    </div>
                                </div>
                                <div class="col-2 my-5" style="font-size: 12px;">
                                    <p class="float-right">
                                        <!-- <a href="" style="text-decoration: none;color: black;">Remove</a> -->
                                        {!! Form::open(['action' => array('CartController@destroy', $item->rowId), 'method' => 'DELETE']) !!}
                                            {{ Form::submit('Remove', ['style' => 'color:black;text-decoration: none; border:none; background: none;float: right;']) }}
                                        {!! Form::close() !!}
                                    </p>
                                    <p class="float-right">
                                        <!-- <a href="#" style="text-decoration: none;color: black;">Save for Later</a> -->
                                        {!! Form::open(['action' => array('CartController@switchToSaveForLater', $item->rowId), 'method' => 'POST']) !!}
                                            {{ Form::submit('Save for Later', ['style' => 'color:black;text-decoration: none; border:none; background: none;float: right;']) }}
                                        {!! Form::close() !!}
                                    </p>
                                </div>
                                <div class="col-1 my-5">
                                    <select class="quantity" data-id="{{ $item->rowId }}" data-productQuantity="{{ $item->model->quantity }}">
                                        @for ($i = 1; $i < 10 + 1 ; $i++)
                                            <option {{ $item->qty == $i ? 'selected' : '' }}>{{ $i }}</option>
                                        @endfor
                                    </select>
                                </div>
                                <div class="col-2 my-5">
                                    {{ presentPrice($item->subtotal()) }}
                                </div>
                            </div>
                        @endforeach
                        <div class="row my-3" style="background-color: #F5F5F5">
                            <div class="col-12">
                                <div class="text-right">
                                        Subtotal: {{ presentPrice(Cart::subtotal()) }}<br>
                                        Tax: {{ presentPrice(Cart::tax()) }}<br>
                                        <div class="font-weight-bold">Total: {{ presentPrice(Cart::total()) }}</div>
                                </div>
                            </div>
                        </div>
                        <div class="row my-2">
                            <div class="col-6">
                                <div class="float-left">
                                    <a href="{{ route('shop.index') }}" class="btn btn-outline-secondary">Continue Shopping</a>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="float-right">
                                    <a href="{{ route('checkout.index') }}" class="btn btn-success">Proceed to Checkout</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @else
            <div class="container my-5">
                <h3>No items in Cart!</h3>
                <a href="{{ route('shop.index') }}" class="btn btn-outline-secondary">Continue Shopping</a>
            </div>
        @endif

        @if(Cart::instance('saveForLater')->count() > 0)
            <div style="background-color: #e9ecef;  box-shadow: 5px 10px 8px #888888;">
                <div class="ml-3 mt-3">
                    <h2>{{ Cart::instance('saveForLater')->count() }} item(s) Saved for Later</h2>
                </div>
    
                <div class="row mx-auto mb-5">
                    <div class="col-8">
                        @foreach(Cart::instance('saveForLater')->content() as $item)
                        <div class="row border-top border-bottom border-dark py-2">
                                <div class="col-4">
                                    <a href="{{ route('shop.show', $item->model->slug) }}" alt="product"><img src="/storage/image.jpg" alt="Product" width="100%" height="100%"></a>
                                </div>
                                <div class="col-5 my-5">
                                    <div class="details">
                                        <p><a style="color:black;text-decoration:none;font-size:22px;" href="{{ route('shop.show', $item->model->slug) }}">{{ $item->model->name }}</a></p>
                                        <p class="text-secondary font-italic" style="opacity:0.6;">{{ $item->model->details }}</p>
                                    </div>
                                </div>
                                <div class="col-1 my-5" style="font-size: 12px;">
                                    <p class="float-right">
                                        <!-- <a href="" style="text-decoration: none;color: black;">Remove</a> -->
                                        {!! Form::open(['action' => array('SaveForLaterController@destroy', $item->rowId), 'method' => 'DELETE']) !!}
                                            {{ Form::submit('Remove', ['style' => 'color:black;text-decoration: none; border:none; background: none;float: right;']) }}
                                        {!! Form::close() !!}
                                    </p>
                                    <p class="float-right">
                                        <!-- <a href="#" style="text-decoration: none;color: black;">Save for Later</a> -->
                                        {!! Form::open(['action' => array('SaveForLaterController@switchToCart', $item->rowId), 'method' => 'POST']) !!}
                                            {{ Form::submit('Move to Cart', ['style' => 'color:black;text-decoration: none; border:none; background: none;float: right;']) }}
                                        {!! Form::close() !!}
                                    </p>
                                </div>
                                <div class="col-2 my-5">
                                    {{ $item->model->presentPrice() }}
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        @else

        @endif

    </div> <!-- End cart section -->

    <div class="container my-3">
        @include('partials.might-like')
    </div>
@endsection

@section('extra-js')
    <script src="{{ asset('js/app.js') }}"></script>
    <script>
        /**
         * 
         */
        (function() {
            const classname = document.querySelectorAll('.quantity')

            Array.from(classname).forEach(function(element) {
                element.addEventListener('change', function() {
                    const id = element.getAttribute('data-id')
                    const productQuantity = element.getAttribute('data-productQuantity')

                    axios.patch(`cart/${id}`, {
                        quantity: this.value,
                        productQuantity: productQuantity
                    })
                    .then(function (response) {
                        // console.log(response);
                        window.location.href = '{{ route("cart.index") }}'
                    })
                    .catch(function (error) {
                        console.log(error);
                        window.location.href = '{{ route("cart.index") }}'
                    });
                })
            })
        })();
    </script>
@endsection