@extends('front-end.master')

@section('title')
    Search-{{ $query }}
@endsection

@section('body')


    <div data-vide-bg="{{ asset('/') }}front/video/vid3.mp4">
        <div class="container">
            <div class="banner-info">
                <h3>Online Pharmacy  </h3>
                <h3> Fastest Online Medicine Delivery </h3>

                <div class="search-form">
                    <form action="{{ route('search') }}" method="get">
                        <input type="text" name="query" placeholder="Search..." value="{{ isset($query) ? $query : '' }}" name="Search...">
                        <input type="submit" value=" "  >
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>window.jQuery || document.write('<script src="{{ asset('/') }}front/js/vendor/jquery-1.11.1.min.js"><\/script>')</script>
    <script src="{{ asset('/') }}front/js/jquery.vide.min.js"></script>

    <!--content-->
    <br/>
    <div class="container ">
        <div class="spec ">
            <h3> {{ $products->count() }}' Results for Search "{{ $query }}"</h3>
            <div class="ser-t">
                <b></b>
                <span><i></i></span>
                <b class="line"></b>
            </div>
        </div>
        <div class="tab-head ">

            <div class=" tab-content tab-content-t ">
                <div class="tab-pane active text-style" id="tab1">
                    <div class="con-w3l">
                        @if($products->count() >0)

                        @foreach($products as $product)

                            <div class="col-lg-3 col-md-12 m-wthree">
                                <div class="col-m">
                                    <a href="{{ route('product-details',['id'=>$product->id]) }}" >
                                        <img class="img-thumbnail img-fluid" src="{{ asset($product->product_image) }}" alt="" style="height: 250px;" >

                                    </a>
                                    <div class="mid-1">
                                        <div class="women">
                                            <h6><a href="{{ route('product-details',['id'=>$product->id]) }}">{{ $product->product_name }}</a></h6>
                                        </div>
                                        <div class="mid-2">
                                            <p><a href="{{ route('product-details',['id'=>$product->id]) }}" class="item_price"> {{ $product->product_price }} Taka</a> </p>
                                            <div class="block">
                                                <div class="starbox small ghosting"> </div>
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                        <div class="add">
                                            <a href="{{ route('product-details',['id'=>$product->id]) }}">
                                                <button class="btn btn-danger my-cart-btn my-cart-b " data-id="1" data-name="Moong" data-summary="summary 1" data-price="1.50" data-quantity="1" data-image="{{ asset('/') }}front/images/of.png">Add to Cart</button>
                                            </a>
                                        </div>

                                    </div>
                                </div>
                            </div>

                        @endforeach

                        @else
                            <div class="spec ">
                                <h3> No Post Found For This Search </h3>

                            </div>

                        @endif

                        <div class="clearfix"></div>
                    </div>
                </div>

            </div>
        </div>

    </div>




    <!-- Carousel
      ================================================== -->




@endsection
