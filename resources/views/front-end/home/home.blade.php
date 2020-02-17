@extends('front-end.master')

@section('title')
    Online Pharmacy Management System
@endsection

@section('body')


    <div data-vide-bg="{{ asset('/') }}front/video/vid7.mp4">
        <div class="container">
            <div class="banner-info">
                <h3> Medicine shop for all  </h3>
                <h3> Best Pharmacy at your home  </h3>

                <div class="search-form" style="background-color: #999977">
                    <form action="{{ route('search') }}" method="get">
                        <input type="text" name="query" placeholder="Search..." name="Search...">
                        <input type="submit"  value=" " >

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
                <h3>New Medicine</h3>
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

                            @foreach($products as $product)

                            <div class="col-lg-3 col-sm-12 m-wthree">
                                <div class="col-m">
                                    <a href="{{ route('product-details',['id'=>$product->id]) }}" >
                                        <img class="img-thumbnail img-fluid" src="{{ asset($product->product_image) }}" alt="" style="height: 240px;" >

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
                                            {{ Form::open(['route'=>'add-to-cart','method'=>'POST'])  }}
                                            <div class="add add-3">
                                                <input type="hidden" name="qty" value="1" min="1" />
                                                <input type="hidden" name="product_id" value="{{ $product->id }}" />
                                                <button type="submit" class="btn btn-success">Add to Cart</button>
                                            </div>
                                            {{ Form::close() }}
                                        </div>

                                    </div>
                                </div>
                            </div>



                            @endforeach

                            <div class="clearfix"></div>
                        </div>
                    </div>

                </div>
            </div>

        </div>

    <br/>


    <!--content-->

    <!--content-->
    <!-- Carousel
      ================================================== -->




@endsection
