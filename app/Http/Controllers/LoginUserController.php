<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LuckpermsPlayer;
use Illuminate\Support\Facades\Auth;

class LoginUserController extends Controller
{
    public function index()
    {
        return view('pages/login_user');
    }

    public function authenticate(Request $request)
    {
        $request->validate([
            'username' => 'required|exists:luckperms_players,username',


        ], [
            'username.exists' => 'Username tidak ditemukan!',

        ]);

        $player = LuckpermsPlayer::where('username', $request->username)->first();

        if ($player) {
            Auth::guard('luckperms')->login($player);
            $request->session()->regenerate();

            return redirect()->intended(route('donation')); // Redirect ke halaman tujuan
        }

        return back()->withErrors([
            'username' => 'Username tidak ditemukan!',
        ])->onlyInput('username');
    }

    public function logout(Request $request)
    {
        Auth::guard('luckperms')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('lp-loginPage');
    }
}
