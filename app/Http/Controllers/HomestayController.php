<?php

namespace App\Http\Controllers;

use App\Models\Homestay;
use App\Models\Destination;
use Illuminate\Http\Request;

class HomestayController extends Controller
{
    function show_homestays()
    {
        $navbar_dests = Destination::all();
        $homestays = Homestay::all();

        return view('user.page.homestays', [
            'title'        => 'Homestays',
            'navbar_dests' => $navbar_dests,
            'homestays'    => $homestays,
        ]);
    }
}
