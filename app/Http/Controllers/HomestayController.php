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

    public function del_homestay($id)
    {
        $homestay = Homestay::findOrFail($id);
        $homestay->is_deleted = true;
        $homestay->save();

        session()->flash('deletion', 'Data berhasil dihapus.');
        return redirect('/admin-homestays');
    }
}
