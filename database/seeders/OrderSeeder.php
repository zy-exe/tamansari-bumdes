<?php

namespace Database\Seeders;

use App\Models\Order;
use Illuminate\Database\Seeder;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class OrderSeeder extends Seeder
{
    public function run(): void
    {
        // order seed
        Order::create([
            'guest'        => 'Kazuya',
            'guest_number' => '62987123565',
            'pack_id'      => 1,
            'pax'          => 2,
            'date'         => '2024 - 12 - 12',
            'status'       => 'Dibayar',
            'invoice'      => 'invoice1.pdf',
        ]);
        Order::create([
            'guest'        => 'Heihachi',
            'guest_number' => '62000222111',
            'pack_id'      => 2,
            'pax'          => 4,
            'date'         => '2024 - 10 - 10',
            'status'       => 'Pending',
            'invoice'      => 'invoice2.pdf',
        ]);
        Order::create([
            'guest'        => 'Jinpachi',
            'guest_number' => '62999777555',
            'pack_id'      => 5,
            'pax'          => 20,
            'date'         => '2024 - 5 - 5',
            'status'       => 'Dibatalkan',
            'invoice'      => 'invoice3.pdf',
        ]);
    }
}
