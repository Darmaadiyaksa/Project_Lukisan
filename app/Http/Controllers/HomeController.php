<?php

namespace App\Http\Controllers;

use App\Models\Packages;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index()
    {
        $title = "Landing Page";
        // $packages=[(object)[
        //    'package_code'=>'DUmmy Code',
        //    'package_name'=>'DUmmy Name',
        //    'package_desc'=>'DUmmy Desc'
        // ],(object)[
        //    'package_code'=>'DUmmy Code 2',
        //    'package_name'=>'DUmmy Name 2',
        //    'package_desc'=>'DUmmy Desc 2'
        // ],(object)[
        //    'package_code'=>'DUmmy Code 3',
        //    'package_name'=>'DUmmy Name 3',
        //    'package_desc'=>'DUmmy Desc 4'
        // ]];
        //dd($packages);
        return view('frontpage.landingpage');
    }
    public function berita()
    {
        return view('frontpage.berita');
    }
    public function pelelangan()
    {
        return view('frontpage.pelelangan');
    }
    public function contact()
    {
        return view('frontpage.contact');
    }
}
