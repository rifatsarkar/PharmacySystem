<?php

namespace App\Http\Controllers;

use App\Customer;
use App\Order;
use App\OrderDetail;
use App\Payment;
use App\Shipping;
use Illuminate\Http\Request;
use DB;
use PDF;

class OrderController extends Controller
{
    public function manageOrder(){
        $orders = DB::table('orders')
            ->join('customers','orders.customer_id', '=' ,'customers.id')
            ->join('payments','orders.id', '=', 'payments.order_id')
            ->select('orders.*','customers.first_name','customers.last_name','payments.payment_type','payments.payment_status' )
            ->get();

        return view('admin.order.manage-order',['orders'=>$orders]);
    }
    public function viewOrderDetail($id){
         $order = Order::find($id);
         $customer = Customer::find($order->customer_id);
         $shipping = Shipping::find($order->shipping_id);
         $payment = Payment::where('order_id',$order->id)->first();
         $products = OrderDetail::where('order_id',$order->id)->get();


        return view('admin.order.view-order',[
            'order'=>$order,
            'customer'=>$customer,
            'shipping'=>$shipping,
            'payment'=>$payment,
            'products'=>$products

            ]);
    }

    public function viewOrderInvoice($id){

        $order = Order::find($id);
        $customer = Customer::find($order->customer_id);
        $shipping = Shipping::find($order->shipping_id);
        $products = OrderDetail::where('order_id',$order->id)->get();

        return view('admin.invoice.invoice-view',
        [
            'order'=>$order,
            'customer'=>$customer,
            'shipping'=>$shipping,
            'products'=>$products

            ]);

    }
    public function downloadInvoice($id){

        $order = Order::find($id);
        $customer = Customer::find($order->customer_id);
        $shipping = Shipping::find($order->shipping_id);
        $products = OrderDetail::where('order_id',$order->id)->get();

        $pdf = PDF::loadView('admin.invoice.download-invoice',[

            'order'=>$order,
            'customer'=>$customer,
            'shipping'=>$shipping,
            'products'=>$products
        ]);

        return $pdf->stream('invoice.pdf');
    }

    public function payBill($id){
        $order = Order::find($id);
        $payment = Payment::where('order_id',$order->id)->first();
        return view('admin.order.pay-bill',[
            'order'=> $order,
            'payment'=> $payment
        ]);
    }

    public function statusAction(Request $request, $id){


        $order = Order::find($id);
        $order->order_status = $request->order_status;
        $order->save();

        $payment = Payment::find($id);
        $payment->payment_status = $request->pay_status;
        $payment->save();

        return redirect()->route('manage-order')->with('message', 'Status Updated Successfully');


    }



    
}
