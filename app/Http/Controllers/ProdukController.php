<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\produk;
use App\Models\kategori;

class ProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $produk = produk::all();
        return view('produk.index', compact('produk'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $kategori = kategori::all();
        return view('produk.create',compact('kategori'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $aturan = [
            'nama' => 'required',
            'kategori' => 'required',
            'qty' => 'required|numeric',
            'beli' => 'required|numeric',
            'jual' => 'required|numeric',
        ];
        $pesan = [
            'required' => 'Data ini Wajib Diisi !',
            'numeric' => 'Mohon isi dengan angka'
        ];
            $request->validate($aturan, $pesan);

        produk::create([
            'nama' => $request->nama,
            'id_kategori' => $request->kategori,
            'qty' => $request->qty,
            'harga_beli' => $request->beli,
            'harga_jual' => $request->jual,
        ]);
        return redirect()->route('produk.index');
    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $produk = produk::where('id',$id)->first();
        return view('produk.show',compact('produk'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $produk = produk::where('id',$id)->first();
        $kategori = Kategori::all();

        return view('produk.edit',compact('produk', 'kategori'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        produk::where('id',$id)
        ->update([
            'nama' => $request->nama,
            'id_kategori' => $request->kategori_id,
            'qty' => $request->qty,
            'harga_beli' => $request->beli,
            'harga_jual' => $request->jual,
        ]);
        return redirect()->route('produk.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        produk::where('id',$id)->delete();
        return redirect()->route('produk.index');
    }
}
