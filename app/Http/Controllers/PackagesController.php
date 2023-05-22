<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Packages;
use App\Models\Comunity;

class PackagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('backpage.daftarpackage');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
}
