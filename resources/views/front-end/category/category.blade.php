@extends('front-end.master')

@section('title')
    Products
@endsection

@section('body')


    <!-- /.carousel -->

    <!--content-->


    <!--content-->
    <div class="product">
        <div class="container">
            <div class="spec ">
                <h3>Medicines</h3>
                <div class="ser-t">
                    <b></b>
                    <span><i></i></span>
                    <b class="line"></b>
                </div>
            </div>


            <div class=" con-w3l agileinf">
                @foreach($products as $product)
                <div class="col-md-3 pro-1">
                    <div class="col-m">
                        <a href="{{ route('product-details',['id'=>$product->id]) }}">
                            <img src="{{ asset($product->product_image) }}" class="img-responsive" alt="" style="height: 240px;">
                        </a>
                        <div class="mid-1">
                            <div class="women">
                                <h6><a href="{{ route('product-details',['id'=>$product->id]) }}">{{ $product->product_name }}</a></h6>
                            </div>
                            <div class="mid-2">
                                <p >TK.<em class="item_price">{{ $product->product_price }}</em></p>
                                <div class="block">
                                    <div class="starbox small ghosting"> </div>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="add">
                                <button class="btn btn-danger my-cart-btn my-cart-b" data-id="36" data-name="Baby Oil" data-summary="summary 36" data-price="6.00" data-quantity="1" data-image="{{ asset('/') }}front/images/of36.png">Add to Cart</button>
                            </div>
                        </div>
                    </div>
                </div>

                @endforeach



                <div class="clearfix"></div>
            </div>
        </div>
    </div>

    

    <br/>
    <br/>
    <br/>


@endsection

