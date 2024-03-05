<?php

namespace App\Http\Controllers;

use App\Models\BarangDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class BarangController extends Controller
{

    public function create()
    {
        return view('barang.create');
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'nama_produk'   =>  'required',
            'harga'         =>  'required',
            'stok'          =>  'required',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withInput()->withErrors($validator);
        }

        $barang = new BarangDetail;
        $barang->nama_produk = $request->nama_produk;
        $barang->harga = $request->harga;
        $barang->stok = $request->stok;
        $barang->save();

        return redirect()->route('index');
    }

    public function edit($id)
    {

        $barang = BarangDetail::where('id',$id)->first();
        // dd($barang);
        return view('barang.edit', compact('barang'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_produk' => 'required',
            'harga' => 'required',
            'stok' => 'required',
        ]);

        $barang = BarangDetail::findOrFail($id);
        $barang->nama_produk = $request->nama_produk;
        $barang->harga = $request->harga;
        $barang->stok = $request->stok;
        $barang->save();

        return redirect()->route('barang.index')->with('success','Produk telah diperbarui');
    }

    public function destroy(BarangDetail $barang)
    {
        $barang->delete();
        return redirect()->route('barang.index')->with('hapus', $barang->nama_produk . 'Produk telah dihapus');
    }

}

        //      Menggunakan first() untuk mendapatkan satu hasil
        //  $barangs = BarangDetail::where('id', $id)->first();
        //   var_dump($barangs);die;
        //  $kategori = kategori::all();

        //   Memastikan produk ditemukan sebelum diteruskan ke view
        //  if(!$barangs){
        //      return redirect()->route('barang.index')->with('error', 'Produk tidak ditemukan');
        //  }

        //   Mengirimkan data produk dan kategori ke view
        //  return view('barang.edit', ['barang' => $barangs, 'barang' => $barangs]);
        //  }

        // return view('barang.edit', compact('barangs'));
    //}
