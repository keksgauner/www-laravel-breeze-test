<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        return view('pages.index');
}
 
    public function imprint()
    {
        return view('pages.imprint');
    }
 
    public function contact()
    {
        return view('pages.contact');
    }
}
