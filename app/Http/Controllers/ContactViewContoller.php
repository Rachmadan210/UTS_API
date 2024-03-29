<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ContactViewController extends Controller
{
    public function index()
    {
        // Ambil data kontak dari API menggunakan HTTP Client Laravel
        $response = Http::get('http://localhost:8000/api/contacts');
        $contacts = $response->json()['data'];

        // Kirim data kontak ke tampilan
        return view('contacts.index', ['contacts' => $contacts]);
    }
}