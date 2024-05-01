@if (sizeof($product->linkedProducts) > 0)
<br/><h4>Related Products</h4><hr/>
<div class="row">
    @foreach ($product->linkedProducts as $product)
    <div class="col-md-3">
    <a href="{{route('web.shop.product',['slug'=>$product->slug])}}">

                                    <div class="card mb-4 product-wap rounded-0 item-wrapper">
                                        <div class="card rounded-0">
                                            <img class="card-img rounded-0 img-fluid" src="{{ asset($product->images[0]->src) }}">
                                            <div class="card-img-overlay rounded-0 product-overlay d-flex align-items-center justify-content-center">
                                                <!-- <ul class="list-unstyled">
                                                    <li><a class="btn btn-success text-white" href="shop-single.html"><i class="far fa-heart"></i></a></li>
                                                    <li><a class="btn btn-success text-white mt-2" href="shop-single.html"><i class="far fa-eye"></i></a></li>
                                                    <li><a class="btn btn-success text-white mt-2" href="shop-single.html"><i class="fas fa-cart-plus"></i></a></li>
                                                </ul> -->
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div class="row  product-title"><a href="{{route('web.shop.product',['slug'=>$product->slug])}}" class="fs-5 fw-bolder text-decoration-none font-red-hat product-name text-center">{{$product->product_name}}</a></div>

                                            <div class="row">
                                                <p class="text-center mb-0 item-price text-uppercase font-red-hat fw-bolder my-2 fs-5 text-right">
                                                @if ($product->unit_price - $product->selling_price > 0)

                                                    <span class="text-muted text-decoration-line-through fs-6 fw-normal font-red-hat">{{$commonContent['currencySymbol']['description']}} {{number_format($product->unit_price,2)}}</span> &nbsp;

                                                    @endif
                                                     {{$commonContent['currencySymbol']['description']}} {{number_format($product->selling_price ,2)}}</p>
                                            </div>

                                            <ul class="w-100 list-unstyled d-flex justify-content-between mb-0">

                                                <li class="pt-2">
                                                    <span class="product-color-dot color-dot-red float-left rounded-circle ml-1"></span>
                                                    <span class="product-color-dot color-dot-blue float-left rounded-circle ml-1"></span>
                                                    <span class="product-color-dot color-dot-black float-left rounded-circle ml-1"></span>
                                                    <span class="product-color-dot color-dot-light float-left rounded-circle ml-1"></span>
                                                    <span class="product-color-dot color-dot-green float-left rounded-circle ml-1"></span>
                                                </li>
                                            </ul>
                                            <ul class="list-unstyled d-flex justify-content-center mb-0 pb-3">
                                                <li>
                                                    <i class="text-warning fa fa-star"></i>
                                                    <i class="text-warning fa fa-star"></i>
                                                    <i class="text-warning fa fa-star"></i>
                                                    <i class="text-muted fa fa-star"></i>
                                                    <i class="text-muted fa fa-star"></i>
                                                </li>
                                            </ul>
                                            <div class="text-center">
                                                <button title="{{$product->id}}" class="btn btn-outline-dark mt-auto btn-add-to-cart">Add To Cart</button>
                                            </div>

                                        </div>
                                    </div>
                                    </a>
                                </div>

    @endforeach
</div>
@endif
