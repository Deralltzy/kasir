<?php

namespace App\Http\Controllers;

use App\Models\BarangDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class HomeController extends Controller
{
    public function index(){

        $barangs = BarangDetail::all();
        return view('barang.index',compact('barangs'));
    }

    // public function create(){

    //     return view('barang.create');
    // }

    // public function store(Request $request){

    //     // var_dump($request->nama_produk);die();
    //     $validator = Validator::make($request->all(),[
    //         'nama_produk'   =>  'required',
    //         'harga'         =>  'required',
    //         'stok'          =>  'required',
    //     ]);

    //     if($validator->fails()) return redirect()->back()->withInput()->withErrors($validator);

    //     $barangs = new BarangDetail;
    //     $barangs->nama_produk = $request->nama_produk;
    //     $barangs->harga =   $request->harga;
    //     $barangs->stok =   $request->stok;
    //     $barangs->save();

    // //BarangDetail::create($barangs);

    // return redirect()->route('index');

    // }
}
