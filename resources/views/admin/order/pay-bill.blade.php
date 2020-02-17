@extends('admin.master')
@section('body')
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="text-center text-success"> Manage Order </h4>
                </div>



                <div class="panel-body">
                    <h2 class="text-success text-center">{{ Session::get('message') }}</h2>



                    <table class="table">
                        <form action="{{ route('status-action', $order->id) }}" method="post">
                            @csrf
                        <tr class="bg-success">
                            <th class="col-sm-auto"> Order & Payment </th>

                        </tr>

                        <tr>
                            <td> Payment Status : </td>
                            <td>
                                <select name="pay_status" id="" class="form-control">
                                    <option value="Pending" @if($payment->pay_status=='Pending') selected='selected' @endif>Pending</option>
                                    <option value="Paid" @if($payment->pay_status=='Paid') selected='selected' @endif>Paid</option>
                                </select>
                            </td>
                        </tr>

                        <tr>
                            <td> Order Status : </td>
                            <td>
                                <select name="order_status" id="" class="form-control">

                                    <option value="Pending" @if($order->order_status=='Pending') selected='selected' @endif>Pending</option>
                                    <option value="Delivered" @if($order->order_status=='Delivered') selected='selected' @endif>Delivered</option>
                                    <option value="Cancle" @if($order->order_status=='Cancle') selected='selected' @endif>Cancle</option>
                                </select>
                            </td>
                        </tr>

                        <tr>
                            <td>
                            </td>
                            <td> <button type="submit" class="btn btn-primary mb-2">Confirm</button></td>

                        </tr>

                    </form>

                    </table>



                </div>
            </div>
        </div>
    </div>

@endsection