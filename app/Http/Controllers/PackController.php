<?php

namespace App\Http\Controllers;

use App\Models\Destination;
use Illuminate\Http\Request;

class PackController extends Controller
{
    public function show_packages()
    {
        $navbar_dests = Destination::all();

        return view('user.page.packages', [
            'title'        => 'Packages',
            'navbar_dests' => $navbar_dests,
        ]);
    }
}
