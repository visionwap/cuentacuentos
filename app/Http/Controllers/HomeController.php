<?php

namespace CuentaCuentos\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('welcome',
        [
          'popular_members' => [],
          'recent_members'  => []
        ]);
    }
}
