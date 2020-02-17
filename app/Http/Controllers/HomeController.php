<?php

namespace App\Http\Controllers;
use App\OrderDetail;
use App\user;
use App\Order;



use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('admin.home.home');
    }

    public function  home()
    {
        $order = OrderDetail::all()->sum('order_id');
        return view('admin.home.home', compact('order_details', 'order_id'));
    }
}
