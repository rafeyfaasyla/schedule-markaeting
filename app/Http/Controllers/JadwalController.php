<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Jadwal;
use App\Models\perusahaan;
use App\Models\activity;
use App\Models\produk;
use App\Models\project;



class JadwalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $schadule = jadwal::with('perusahaan','activity','produk','project')->get();
        $per = perusahaan::all();
        $act = activity::all();
        $pro = produk::all();
        $projec = project::all();
        return view('admin.jadwal.index', compact('schadule','per','act','pro','projec'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $per = perusahaan::all();
        $act = activity::all();
        $pro = produk::all();
        $projec = project::all();
        return view('admin.jadwal.create', compact('per','act','pro','projec'));

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
            'id_perusahaan' => 'required',
            'id_produk' => 'required',
            'id_project' => 'required',
            'id_activity' => 'required',
        ]);

        $schadule = new jadwal();
        $schadule->id_perusahaan = $request->id_perusahaan;
        $schadule->id_produk = $request->id_produk;
        $schadule->id_project = $request->id_project;
        $schadule->id_activity = $request->id_activity;



        $schadule->save();
        return redirect()->route('jadwal.index')
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
        $schadule = jadwal::findOrFail($id);
        return view('admin.jadwal.show', compact('schadule'));
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
        $schadule = jadwal::findOrFail($id);
        return view('admin.jadwal.edit', compact('schadule'));
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
            'id_perusahaan' => 'required',
            'id_produk' => 'required',
            'id_project' => 'required',
            'id_activity' => 'required',
        ]);

        $schadule = jadwal::findOrFail($id);
        $schadule->id_perusahaan = $request->id_perusahaan;
        $schadule->id_produk = $request->id_produk;
        $schadule->id_produk = $request->id_produk;
        $schadule->id_activity = $request->id_activity;

        $schadule->save();
        return redirect()->route('jadwal.index')
        ->with('success', 'Data berhasil dibuat!');
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
        $schadule = jadwal::findOrFail($id);
        $schadule->delete();
        return redirect()->route('jadwal.index')
            ->with('success', 'Data berhasil dihapus!');
    }
}
