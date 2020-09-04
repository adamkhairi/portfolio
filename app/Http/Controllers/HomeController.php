<?php

namespace App\Http\Controllers;

use App\Experience;
use App\Formation;
use App\Work;
use Illuminate\Http\Request;

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
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function index()
    {
        $formations = Formation::all();
        $works = Work::all();
        $experiences = Experience::all();

        return view('/admin.dashboard', compact('formations', 'works', 'experiences'));
    }

}
