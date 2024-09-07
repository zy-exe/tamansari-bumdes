<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function del_order($id)
    {
        $order = Order::findOrFail($id);
        $order->delete();

        session()->flash('deletion', 'Data berhasil dihapus.');
        return redirect('/admin-orders');
    }
}
