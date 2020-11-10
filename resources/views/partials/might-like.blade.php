<div class="might-like-section">
    <div class="container rounded" style="background-color: #e9ecef;">
        <h2 style="color: darkslategrey;">You might also like...</h2>
        <div class="row mx-auto">
            @foreach($mightAlsoLike as $product)
                <div class="col-3">
                    <a href="{{ route('shop.show', $product->slug) }}" class="might-like-product">
                        <img class="border rounded" src="/storage/{{$product->slug}}.jpg" alt="product" height="75%" width="100%">
                        <div class="might-like-product-name"><p style="color: black;">
                            {{ $product->name }}
                        </p></div>
                        <div class="might-like-product-price"><p style="color: black;">
                            {{ $product->presentPrice() }}
                        </p></div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
</div>