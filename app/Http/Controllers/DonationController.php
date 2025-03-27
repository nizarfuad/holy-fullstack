<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DonationController extends Controller
{
    public function index()
    {
        $ranks = [
            [
                'id' => 1,
                'name' => 'VIP',
                'image' => 'images/vip.png',
                'features' => ['Akses /kit bronze', 'Prefix Bronze', 'Warp khusus'],
                'price' => 50000,
                'diskon' => 20000,
            ],
            [
                'id' => 2,
                'name' => 'VVIP',
                'image' => 'images/vvip.png',
                'features' => ['Akses /kit silver', 'Prefix Silver', 'Warp VIP', 'Extra Slot Home'],
                'price' => 100000,
                'diskon' => 20000,
            ],
            [
                'id' => 3,
                'name' => 'MVP',
                'image' => 'images/mvp.png',
                'features' => ['Akses /kit gold', 'Prefix Gold', 'Warp VIP+', 'Fly di world tertentu'],
                'price' => 300000,
                'diskon' => 20000,
            ],
            [
                'id' => 3,
                'name' => 'LEGEND',
                'image' => 'images/legend.png',
                'features' => ['Akses /kit gold', 'Prefix Gold', 'Warp VIP+', 'Fly di world tertentu'],
                'price' => 500000,
                'diskon' => 20000,
            ],
            [
                'id' => 3,
                'name' => 'HOLY',
                'image' => 'images/holy.png',
                'features' => ['Akses /kit gold', 'Prefix Gold', 'Warp VIP+', 'Fly di world tertentu'],
                'price' => 1000000,
                'diskon' => 20000,
            ],
        ];

        return view('pages/donation', compact('ranks'));
    }
}
