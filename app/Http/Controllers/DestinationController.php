<?php

namespace App\Http\Controllers;

use App\Models\Destination;
use Illuminate\Http\Request;

class DestinationController extends Controller
{
    public function show_dest($slug)
    {
        $navbar_dests = Destination::all();
        $destination  = Destination::where('slug', $slug)->firstOrFail();

        return view('user.page.dest', [
            'title'        => $destination->name,
            'navbar_dests' => $navbar_dests,
            'destination'  => $destination,
        ]);
    }

    public function del_destination($id)
    {
        $destination = Destination::findOrFail($id);
        $destination->is_deleted = true;
        $destination->save();

        session()->flash('deletion', 'Data berhasil dihapus.');
        return redirect('/admin-destinations');
    }
}
