<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaksi;

class TransaksiController extends Controller
{
    public function index()
    {
        // Tampilkan semua transaksi
        $transactions = Transaksi::all();
        return view('transaksi.index', compact('transaksi'));
    }

    public function create()
    {
        // Tampilkan form untuk membuat transaksi baru
        return view('transaksi.create');
    }

    public function store(Request $request)
    {
        // Validasi data input
        $validatedData = $request->validate([
            'name' => 'required',
            'amount' => 'required|numeric',
            // Tambahkan aturan validasi lainnya sesuai kebutuhan
        ]);

        // Buat transaksi baru
        Transaksi::create($validatedData);

        // Redirect kembali ke halaman index transaksi
        return redirect()->route('transactions.index');
    }

    public function show(Transaksi $transaksi)
    {
        // Tampilkan detail transaksi
        return view('transactions.show', compact('transaction'));
    }

    // Tambahkan function-function lainnya seperti edit(), update(), destroy() sesuai kebutuhan
}
