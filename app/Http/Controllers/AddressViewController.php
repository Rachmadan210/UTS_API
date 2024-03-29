<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class AddressViewController extends Controller
{
    public function index()
    {
        // Panggil API untuk mendapatkan daftar alamat
        $response = Http::get('http://localhost:8000/api/contacts/1/addresses');
        $addresses = $response->json()['data'];

        // Kirim data alamat ke tampilan Blade
        return view('addresses.index', ['addresses' => $addresses]);
    }
}