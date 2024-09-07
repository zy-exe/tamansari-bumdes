<?php

namespace App\Http\Controllers;

use App\Models\Pack;
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

    public function del_package($id)
    {
        $package = Pack::findOrFail($id);
        $package->deleted = true;
        $package->save();

        session()->flash('deletion', 'Data berhasil dihapus.');
        return redirect('/admin-packages');
    }
}
