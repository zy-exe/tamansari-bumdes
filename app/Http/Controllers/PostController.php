<?php

namespace App\Http\Controllers;

use App\Models\Destination;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function show_home()
    {
        $navbar_dests = Destination::all();

        return view('user.page.home', [
            'title'        => 'Home',
            'navbar_dests' => $navbar_dests,
        ]);
    }
}
