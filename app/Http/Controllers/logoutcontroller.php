<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use app\Http\Requests\UserLoginRequest;

class logoutcontroller extends Controller
{
    public function login(UserLoginRequest $request)
    {
        // Lakukan validasi terlebih dahulu
        $credentials = $request->only('username', 'password');

        if (Auth::attempt($credentials)) {
            // Jika autentikasi berhasil, kembalikan respons berhasil
            return response()->json(['message' => 'Authentication successful'], 200);
        } else {
            // Jika autentikasi gagal, kembalikan respons gagal
            return response()->json(['message' => 'Authentication failed'], 401);
        }
    }

    public function logout(Request $request)
    {
        Auth::logout(); // Lakukan proses logout

        return response()->json(['message' => 'Logged out successfully'], 200);
    }
}
