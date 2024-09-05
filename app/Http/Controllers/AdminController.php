<?php

namespace App\Http\Controllers;

use App\Models\Pack;
use App\Models\Destination;
use App\Models\Homestay;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function show_dashboard() {
        return view('admin.page.dashboard', ["page" => "dashboard"]); }

    public function show_destinations() {
        $destinations  = Destination::get()->sortBy('name');

        return view('admin.page.dest', [
            "page"         => "destinations",
            "destinations" => $destinations,
        ]);
    }

    public function show_packages() {
        $packages  = Pack::get();

        return view('admin.page.packages', [
            "page"     => "packages",
            "packages" => $packages,
        ]);
    }
    public function show_homestays() { 
        $homestays = Homestay::get();
        
        return view('admin.page.homestays', [
            "page" => "homestays",
            "homestays" => $homestays,
        ]);
    }

    public function show_orders() { 
        return view('admin.page.orders', ["page" => "orders"]); }
    public function show_order_insert() { 
        return view('admin.page.order_insert', ["page" => "order_insert"]); }
}
