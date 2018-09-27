<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RouteListController extends Controller
{
    /**
     * Show the application RouteList.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('route_list');
    }
}
