<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\perusahaan;

class perusahaanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $per = perusahaan::all();
        return view('admin.perusahaan.index', compact('per'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.perusahaan.create');

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
            'nama_perusahaan' => 'required',
            'alamat' => 'required',
            'detail' => 'required',

        ]);
        $per = new perusahaan();
        $per->nama_perusahaan = $request->nama_perusahaan;
        $per->alamat = $request->alamat;
        $per->detail = $request->detail;
        $per->save();
        return redirect()->route('perusahaan.index')
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
        $per = perusahaan::findOrFail($id);
        return view('admin.perusahaan.show', compact('per'));
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
        $per = perusahaan::findOrFail($id);
        return view('admin.perusahaan.edit', compact('per'));
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
            'nama_perusahaan' => 'required',
            'alamat' => 'required',
            'detail' => 'required',

        ]);
        $per = perusahaan::findOrFail('$id');
        $per->nama_perusahaan = $request->nama_perusahaan;
        $per->alamat = $request->alamat;
        $per->detail = $request->detail;
        $per->save();
        return redirect()->route('perusahaan.index')
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
        $per = perusahaan::findOrFail($id);
        $per->delete();
        return redirect()->route('perusahaan.index')
            ->with('success', 'Data berhasil dihapus!');
    }
}
