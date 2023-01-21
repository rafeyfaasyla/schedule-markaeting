<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\produk;

class produkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $pro = produk::all();
        return view('admin.produk.index', compact('pro'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.produk.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $validated = $request->validate([
            'code_produk' => 'required',
            'nama_produk' => 'required',
            'jenis_produk' => 'required',
            'image' => 'required',
            'deskripsi' => 'required',

        ]);
        $pro = new produk();
        $pro->code_produk = $request->code_produk;
        $pro->nama_produk = $request->nama_produk;
        $pro->jenis_produk = $request->jenis_produk;
         if($request->hasFile('image')){
            $foto = $request->file('image');
            $name = rand(1000,9999).$foto->getClientOriginalName();
            $foto->move('images/produk/', $name);
            $pro->image = $name;
        }
        $pro->deskripsi = $request->deskripsi;

        $pro->save();
        return redirect()->route('produk.index')
        ->with('success', 'Data berhasil dibuat!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $pro = produk::findOrFail($id);
        return view('admin.produk.show', compact('pro'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $pro = produk::findOrFail($id);
        return view('admin.produk.edit', compact('pro'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $validated = $request->validate([
            'code_produk' => 'required',
            'nama_produk' => 'required',
            'jenis_produk' => 'required',
            'image' =>'nullable',
            'deskripsi' => 'required',


        ]);
        $pro = produk::findOrFail($id);
        $pro->code_produk = $request->code_produk;
        $pro->nama_produk = $request->nama_produk;
        $pro->jenis_produk = $request->jenis_produk;
        if($request->hasFile('image')){
            $foto = $request->file('image');
            $name = rand(1000,9999).$foto->getClientOriginalName();
            $foto->move('images/produk/', $name);
            $pro->image = $name;
        }
        $pro->deskripsi = $request->deskripsi;

        $pro->save();
        return redirect()->route('produk.index')
        ->with('success', 'Data berhasil diupdate!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $pro = produk::findOrFail($id);
        $pro->delete();
        return redirect()->route('produk.index')
            ->with('success', 'Data berhasil dihapus!');
    }
}
