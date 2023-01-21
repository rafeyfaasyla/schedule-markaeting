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
        $per = perusahaan::all()->count();
        $act = activity::all()->count();
        $pro = produk::all()->count();
        $projec = project::all()->count();
        return view('admin.index', compact('per','act','pro','projec'));


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

}
