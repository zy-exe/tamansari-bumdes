<?php

namespace App\Http\Controllers;

use App\Models\Pack;
use App\Models\Order;
use App\Models\Homestay;
use App\Models\Destination;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function show_dashboard() {
        return view('admin.page.dashboard', ["page" => "dashboard"]); }

    public function show_destinations() {
        $destinations  = Destination::where('deleted', false)->get();

        return view('admin.page.dest', [
            "page"           => "destinations",
            "destinations"   => $destinations,
        ]);
    }

    public function show_packages() {
        $packages = Pack::where('deleted', false)->get();

        return view('admin.page.packages', [
            "page"     => "packages",
            "packages" => $packages,
        ]);
    }
    public function show_homestays() { 
        $homestays = Homestay::where('deleted', false)->get();
        
        return view('admin.page.homestays', [
            "page" => "homestays",
            "homestays" => $homestays,
        ]);
    }

    public function show_orders() { 
        $orders = Order::get();

        return view('admin.page.orders',[
            "page" => "orders",
            "orders" => $orders,
        ]);
    }

    public function show_order_insert() { 
        return view('admin.page.order_insert', ["page" => "order_insert"]); }
}
