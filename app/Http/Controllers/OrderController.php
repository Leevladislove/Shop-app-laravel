<?php

namespace App\Http\Controllers;

use App\Models\Good;
use App\Models\User;
use App\Models\Order;
use App\Models\OrderGood;
use App\Mail\OrderCompleted;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class OrderController extends Controller
{   
    public function buy(Good $good)
    {   
        if($good === null) {
            return redirect()->route('home');
        }

        $currentOrder = Order::getCurrentOrder($good->id);
        
        if(!$currentOrder) {
            ($currentOrder = new Order([
                'user_id'=> Auth::id(),
                'state' => Order::STATE_CURRENT,
            ]))->save();
        }

        (new OrderGood([
            'order_id' => $currentOrder->id,
            'good_id' => $good->id,
        ]))->save();

        return redirect()->route('order.current');
    }

    public function current()
    {
        $order = Order::getCurrentOrder(Auth::id());
        $goods = $order->goods ?? [];
        $totalSumOrders = $order ? $order->getSum() : 0;

        return view('orders.current', compact('goods', 'totalSumOrders'));
    }

    public function process()
    {
        $currentOrder = Order::getCurrentOrder(Auth::id());

        if(!$currentOrder) {
            return redirect()->route('home');
        }

        Mail::to(User::find(1))->send(new OrderCompleted($currentOrder, Auth::user()));
        $currentOrder->saveAsProcessed();

        return view('orders.completed');
    }
}
