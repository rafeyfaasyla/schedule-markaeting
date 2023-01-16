<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\project;

class projectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $projec = project::all();
        return view('admin.project.index', compact('projec'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.project.create');

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
            'code_project' => 'required',
            'tanggal' => 'required',
            'nama_project' => 'required',
            'jenis_project' => 'required',
            'deadline' => 'required'

        ]);
        $projec = new project();
        $projec->code_project = $request->code_project;
        $projec->tanggal = $request->tanggal;
        $projec->nama_project = $request->nama_project;
        $projec->jenis_project = $request->jenis_project;
        $projec->deadline = $request->deadline;

        $projec->save();
        return redirect()->route('project.index')
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
        $projec = project::findOrFail($id);
        return view('admin.project.show', compact('projec'));
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
        $projec = project::findOrFail($id);
        return view('admin.project.edit', compact('projec'));
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
            'code_project' => 'required',
            'tanggal' => 'required',
            'nama_project' => 'required',
            'jenis_project' => 'required',
            'deadline' => 'required'

        ]);
        $projec = project::findOrFail($id);
        $projec->code_project = $request->code_project;
        $projec->tanggal = $request->tanggal;
        $projec->nama_project = $request->nama_project;
        $projec->jenis_project = $request->jenis_project;
        $projec->deadline = $request->deadline;

        $projec->save();
        return redirect()->route('project.index')
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
        $projec = project::findOrFail($id);
        $projec->delete();
        return redirect()->route('project.index')
            ->with('success', 'Data berhasil dihapus!');
    }
}
