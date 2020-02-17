@extends('admin.master')
@section('body')
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="text-center text-success"> Manage Medicine </h4>
                </div>
                <div class="panel-body">
                    <table class="table">



                        <tr>
                            <th> Medicine ID: </th>
                            <td> {{ $product->id }} </td>
                        </tr>
{{--                        <tr>--}}
{{--                            <th> Category Name: </th>--}}
{{--                            <td> {{ $product->category_id }} </td>--}}
{{--                        </tr>--}}
{{--                        <tr>--}}
{{--                            <th> Brand Name: </th>--}}
{{--                            <td> {{ $product->brand_id }} </td>--}}
{{--                        </tr>--}}
                        <tr>
                            <th> Medicine Name: </th>
                            <td> {{ $product->product_name }} </td>
                        </tr>
                        <tr>
                            <th> Medicine Price: </th>
                            <td> {{ $product->product_price }} </td>
                        </tr>
                        <tr>
                            <th> Medicine Quantity: </th>
                            <td> {{ $product->product_quantity }} </td>
                        </tr>

                        <tr>
                            <th>  Group </th>
                            <td> {{ $product->short_description }} </td>
                        </tr>
                        <tr>
                            <th> Description </th>
                            <td> {{ $product->long_description }} </td>
                        </tr>
                        <tr>
                            <th> Medicine Image </th>
                            <td> <img src=" {{asset($product->product_image)}} " alt="" height="420" width="430" > </td>
                        </tr>
                        <tr>
                            <th> Publication Status </th>
                            <td> {{ $product->publication_status == 1 ? 'published' : 'unpublished' }} </td>
                        </tr>



                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection