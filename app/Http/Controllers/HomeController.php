<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        // On est connecté, on peut donc retourner les stars à modifier
        $stars = DB::table('stars')->get();

        return view('backoffice', array(
            'stars' => $stars->toArray(),
        ));
    }
}
