<a class="" href="/cart" role="button" id="mini_cart_drop_down" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="far fa-shopping-cart green-text font-22 pe-3 "></i>
@if(session()->has('cart') && count(session()->get('cart')) > 0)
<span class="fw-bold font-Asap text-black font-16 "> {{ number_format(Session::get('cartValues')['cart_total'],2) }}</span>
     
@else

<span class="fw-bold font-Asap text-black font-16 ">RS.0.00</span>
@endif
</a>
@if(session()->has('cart') && count(session()->get('cart')) > 0)
<span class="badge cart_count_badge">{{ count(session()->get('cart')) }}</span>
@endif
{{-- <div class="dropdown-menu dropdown-menu-right mini_cart_drop" aria-labelledby="mini_cart_drop_down">
    <div class="row w-100 mx-auto">
        @if(session()->has('cart') && count(session()->get('cart')) > 0)
        @php
        $cart_total = 0;
        @endphp
        @foreach(session()->get('cart') as $key => $cart_item)
        <div class="col-12 mini_cart_item px-1 mb-2">
            <div class="row w-100 mx-0 item_row">
                <div class="col-3 mini_cart_image ps-0 pe-1 d-flex align-items-center">
                    <img class="w-100" src="{{ asset($cart_item['image']) }}" alt="{{ asset('images/frontend/images/cat-img-1.png') }}">
                </div>
                <div class="col-7 ps-1 py-1">
                    <h6 class="fw-bold mb-0">{{ $cart_item['title'] }}</h6><br/>
                    
                    <div class="row w-100 mx-0 mini_cart_price_detail">
                        <div class="col-7  ps-0 py-0 fw-bold">
                            {{$commonContent['currencySymbol']['description']}}{{ number_format($cart_item['unit_price'], 2) }} x {{ $cart_item['qty'] }}
                        </div>
                        <div class="col-5 text-end pe-0 py-0 fw-bold">
                            {{$commonContent['currencySymbol']['description']}}{{ number_format($cart_item['total_price'], 2) }}
                        </div>
                    </div>
                </div>
                <div class="col-2 text-end ps-1 pe-0 py-0">
                    <button title="{{ $cart_item['product_id'].','.$cart_item['variant_id'] }}" class="mini_cart_remove_btn">x</button>
                </div>
            </div>
        </div>
        @php
            $cart_total += $cart_item['total_price'];
        @endphp
        @endforeach
        <div class="col-6">
            <h6 class="fw-bold">Total</h6>
        </div>
        <div class="col-6 text-end">
            <h5 class="fw-bold">{{$commonContent['currencySymbol']['description']}} {{ number_format(Session::get('cartValues')['cart_total'],2) }}</h5>
        </div>
        
        <div class="col-12 pe-1">
            <a href="{{ route('web.cart') }}" class="btn bg-yellow w-100 btn-block btn_hover_animate_primary">View Cart</a>
        </div>
        @else
        <div class="col-12">
            Cart is empty !
        </div>
        @endif

    </div>
</div> --}}



