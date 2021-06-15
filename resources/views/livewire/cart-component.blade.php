<main id="main" class="main-site">
<div class="container">
    <div class="wrap-breadcrumb">
        <ul>
            <li class="item-link"><a href="/" class="link">home</a></li>
            <li class="item-link"><span>Cart</span></li>
        </ul>
    </div>
    <div class="main-content-area">
        <div class="wrap-iten-in-cart">
            @if (Session::has('success_massage'))
                <div class="alert alert-success">
                    <strong>Success</strong> {{Session::get('success_message')}}
                </div>
            @endif
            {{-- @if (Cart::count() > 0) --}}
                <h3 class="box-title">Products Name</h3>
                <ul class="products-cart">
                    {{-- @foreach (Cart::count() as $item) --}}
                        <li class="pr-cart-item">
                            <div>
                                <figure>
                                    <img src="{{ asset('asset/images/products') }}/" alt="" />
                                </figure>
                            </div>
                            <div class="product-name">
                                {{-- <a class="link-to-product" href="{{ route('product.details') }}"></a> --}}
                            </div>
                            <div class="price-field product-price">
                                <p class="price"></p>
                            </div>
                        </li>
                    </ul>
                    {{-- @endforeach --}}
            {{-- @endif --}}
        </div>
    </div>
</div>
</main>
