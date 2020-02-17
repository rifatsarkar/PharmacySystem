@extends('front-end.master')


@section('body')

    <div class="banner-top">
        <div class="container">
            <h3 >Medicine Details</h3>
            <h4><a href="">Medicine Details </a><label>/</label>{{ $product->product_name }}</h4>
            <div class="clearfix"> </div>
        </div>
    </div>
    <div class="single">
        <div class="container">
            <div class="single-top-main">
                <div class="col-md-4 single-top">
                    <div class="single-w3agile">

                        <div id="picture-frame">
                            <img src="{{ asset($product->product_image) }}" data-src="{{ asset($product->product_image) }}" alt="" class="img-responsive"/>
                        </div>
                        <script src="{{ asset('/') }}front/js/jquery.zoomtoo.js"></script>
                        <script>
                            $(function() {
                                $("#picture-frame").zoomToo({
                                    magnify: 0.6
                                });
                            });
                        </script>



                    </div>
                </div>
                <div class="col-md-4 single-top-left ">
                    <div class="single-right">
                        <h3>{{ $product->product_name }}</h3>


                        <div class="pr-single">
                            <p> <strong>TK. {{ $product->product_price }} </strong></p>

                        </div>

                        <div >
                            <div class=""><strong> HOT LINE :</strong> 1212 </div>
                        </div>

                        <p class="in-pa"> {{ $product->short_description }} </p>

                        <ul class="social-top">
                            <li><a href="https://www.facebook.com/Pro-Shopping-BD-410762965785469/" class="icon facebook"><i class="fa fa-facebook" aria-hidden="true"></i><span></span></a></li> <br/>

                        </ul>



                        {{ Form::open(['route'=>'add-to-cart','method'=>'POST'])  }}
                        <div class="add add-3">
                            <input type="number" name="qty" value="1" min="1" />
                            <input type="hidden" name="product_id" value="{{ $product->id }}" />
                            <button type="submit" class="btn btn-success">Add to Cart</button>
                        </div>
                        {{ Form::close() }}

                        <div class="clearfix"> </div>
                    </div>


                </div>
                <br/>
                <div class="row col-md-4">

                        <div class="container-fluid">

                                <div class="spec">
                                    <h3> Details </h3>

                                </div>

                                <p> <h4>{!! $product->long_description !!} </h4> </p>


                        </div>




                </div>

                <div class="clearfix"> </div>
            </div>


        </div>
    </div>
    <!---->



    <!---->
    <br/>
    <br/>
    <hr/>

    

    <br/>
    <br/>
    <br/>

@endsection
