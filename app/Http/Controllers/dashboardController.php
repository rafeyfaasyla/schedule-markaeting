<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dashboard;
use App\Models\perusahaan;
use App\Models\activity;
use App\Models\project;
use App\Models\produk;


class dashboardController extends Controller
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
        $act = activity::all();
        $pro = produk::all();
        $projec = project::all();
        return view('layouts.dashboard', compact('per','act','pro','projec'));


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

}
