<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function show_dashboard()
    {
        return view('admin.page.dashboard', [
            'title'        => 'Admin Tamansari',
        ]);
    }
}
