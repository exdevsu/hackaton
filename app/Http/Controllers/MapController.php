<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MapController extends Controller
{
    /**
     * Show the application map.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('map');
    }
}
