<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Order;
use App\OrderItem;
use App\Shipping;
use Carbon\Carbon;
use App\Consultant;
use App\User;
use App\Blood;
use App\Model\Message;


class ProfileController extends Controller
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

     public function uProfile()

    {   
        $bloods = Blood:: where('user_id',Auth::id())->count();
        $messages = Message::where('user_id',Auth::id())->count();
        $orders = Order::where('user_id',Auth::id())-> count();
        return view('user.dashboard',compact('orders','messages','bloods'));

    }
    public function uOrders()

    {
        $orders = Order::where('user_id',Auth::id())->latest()-> get();
      return view('user.detailsorder',compact('orders'));

    }

    public function ordersView($order_id)

    {
        $order = Order::findOrfail($order_id);
        $orderItems = OrderItem::where('order_id',$order_id)->get();
        $shipping = Shipping::where('order_id',$order_id)->first();

        return view('user.vieworder', compact('order','orderItems','shipping'));

    }
        public function consultantManage(){
        $consultants = Consultant::latest()-> get();
         
        return view('user.uconview',compact('consultants'));
   }
    


}
