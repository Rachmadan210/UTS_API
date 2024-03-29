<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class AddressController extends Controller
{
    public function store(Request $request, $idContact)
    {
        // Logika untuk menyimpan alamat baru
    }

    public function index(Request $request, $idContact)
    {
        // Logika untuk mengambil daftar alamat
    }

    public function show(Request $request, $idContact, $idAddress)
    {
        // Logika untuk mengambil alamat tertentu
    }

    public function update(Request $request, $idContact, $idAddress)
    {
        // Logika untuk memperbarui alamat
    }

    public function destroy(Request $request, $idContact, $idAddress)
    {
        // Logika untuk menghapus alamat
    }
}