<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\activity;

class activityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $act = activity::all();
        return view('admin.activity.index', compact('act'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.activity.create');
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
            'tanggal' => 'required',
            'kegiatan' => 'required',
            'status' => 'required',

        ]);
        $act = new activity();
        $act->tanggal = $request->tanggal;
        $act->kegiatan = $request->kegiatan;
        $act->status = $request->status;

        $act->save();
        return redirect()->route('act.index')
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
        $act = activity::findOrFail($id);
        return view('admin.activity.show', compact('act'));
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
        $act = activity::findOrFail($id);
        return view('admin.activity.edit', compact('act'));
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
            'tanggal' => 'required',
            'kegiatan' => 'required',
            'status' => 'required',

        ]);
        $act = activity::findOrFail($id);
        $act->tanggal = $request->tanggal;
        $act->kegiatan = $request->kegiatan;
        $act->status = $request->status;

        $act->save();
        return redirect()->route('act.index')
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
        $act = activity::findOrFail($id);
        $act->delete();
        return redirect()->route('act.index')
            ->with('success', 'Data berhasil dihapus!');
    }
}
