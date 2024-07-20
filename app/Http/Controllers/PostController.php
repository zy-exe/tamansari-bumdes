<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function show_home()
    {
        return view('page.home', ['title' => 'Home',]);
    }
    public function show_dest_ijen()
    {
        return view('page.dest-ijen', ['title' => 'Destinations Ijen',]);
    }
    public function show_dest_terakota()
    {
        return view('page.dest-terakota', ['title' => 'Destinations Terakota',]);
    }
    public function show_dest_seruni()
    {
        return view('page.dest-seruni', ['title' => 'Destinations Seruni',]);
    }
    public function show_packages()
    {
        return view('page.packages', ['title' => 'Packages',]);
    }
    public function show_homestays()
    {
        return view('page.homestays', ['title' => 'Homestays',]);
    }
}
