@extends('front-end.master')

@section('title')
    add to cart

@endsection

@section('body')

    <br/>
    <div class="container">
        <div>

        <table id="cart" class="table">
            <thead>
            <tr>

                <th class="text-center">Medicine</th>
                <th class="text-center">Price</th>
                <th class="text-center">Quantity</th>
                <th class="text-center">Subtotal</th>
                <th class="text-center">Delete </th>
            </tr>
            </thead>
            @php($sum = 0)
            @php($i=1)
            @php($total)
            @foreach($cartProducts as $cartProduct)

                <tbody>

                <tr>
                    <td data-th="Product">
                        <div class="row">
                            

                            <div class="col-sm-10">
                                <h4 class="nomargin text-center">{{ $cartProduct->name }}</h4>
                            
                        </div>
                    </td>
                    <td  class="text-center">{{ $cartProduct->price }}</td>
                    <td data-th="Quantity">
                        {{Form::open(['route'=>'update-cart', 'method'=>'POST']) }}
                        <input type="number" class="form-control text-center" name="qty" value="{{ $cartProduct->qty }}">
                        <input type="hidden" class="form-control text-center" name="row_id" value="{{ $cartProduct->rowId }}">
                        <input type="submit" class="form-control text-center btn-info glyphicon glyphicon-play" name="btn" value="Update">
                        {{Form::close()}}
                    </td>
                    <td data-th="Subtotal" class="text-center">{{ $total = $cartProduct->price * $cartProduct->qty }}</td>
                    <td class="actions" data-th="">

                        <a href="{{ route('delete-cart-product',['rowId'=>$cartProduct->rowId]) }}" class="btn btn-danger btn-sm"><i class="fa fa-trash-o"></i></a>
                    </td>
                </tr>
                </tbody>

                <?php
                /** @var TYPE_NAME $cartProduct */
                $total = $cartProduct->price * $cartProduct->qty;
                $sum = $sum + $total; ?>
            @endforeach
<div class="">
            <tfoot>
            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td><h5>Subtotal</h5></td>
                <td class="text-right"><h5><strong>{{ $sum }}</strong></h5></td>
            </tr>
            <tr>

                <td></td>
                <td></td>
                <td></td>
                
                <td><h5> Delivery Charge</h5></td>
                <td class="text-right"><h5><strong>TK. {{ $vat = 60 }}</strong></h5></td>
            </tr>

            <tr>

                <td></td>
                <td></td>
                <td></td>
                
                <td><h4>Grand Total </h4></td>
                <td class="text-right"><h4><strong>  {{ $grandTotal = $sum+$vat }}</strong></h4>
                            <@php(Session::put('grandTotal', $grandTotal)) 
                        </td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td></td>
                
                <td>
                    <a href="{{ route('/') }}" type="button" class="btn btn-default">
                        <span class="glyphicon glyphicon-shopping-cart"></span> Continue Buying
                    </a>
                </td>


                <td>

                    @if(Session::get('customer_id') && Session::get('shipping_id'))
                    <a href="{{ route('show-payment') }}" type="button" class="btn btn-success"/>
                        Checkout <span class="glyphicon glyphicon-play"></span>
                    </a>
                    @elseif(Session::get('customer_id'))
                        <a href="{{ route('show-shipping') }}" type="button" class="btn btn-success"/>
                            Checkout <span class="glyphicon glyphicon-play"></span>
                     @else
                        <a href="{{ route('checkout') }}" type="button" class="btn btn-success"/>
                        Checkout <span class="glyphicon glyphicon-play"></span>
                    @endif

                </td>
            </tr>
            </tfoot>

        </div>


        </table>

        </div>

    </div>

@endsection

