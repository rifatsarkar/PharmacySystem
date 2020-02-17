<?php

namespace App\Http\Controllers;

use App\Category;
use App\Customer;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class BigStoreController extends Controller
{
    public function index(){
        $categories = Category::where('publication_status',1)->get();
        $products = Product::orderBy('id','desc')->take(16)->get();


        return view('front-end.home.home',['categories'=>$categories,'products'=>$products]);

    }
    public function categoryProduct($id){
        // pathai dichi app service provider e
        $products = Product::where('category_id', $id)
            ->where('publication_status', 1)
            ->orderBy('id','desc')
            ->get();


        return view('front-end.category.category',['products'=>$products]);

    }



    public function productDetails($id){
        $product = Product::find($id);
        return view('front-end.product.product-details', ['product'=>$product]);
    }

    public function login(){

        return view('login.login');
    }

    public function customerLoginShop(Request $request){

        $customer = Customer::where('email_address', $request->email_address)->first();
        if ($customer){
            if (password_verify($request->password, $customer->password)) {

                Session::put('customer_id', $customer->id);
                Session::put('customerName', $customer->first_name.' '.$customer->last_name);

                return redirect('/home');


            } else {
                return redirect('/customer-login-shop')->with('message', 'Password is invalid');
            }

        }else{
            return redirect('/customer-login-shop')->with('message', 'Email Address is invalid');

        }

    }


}
