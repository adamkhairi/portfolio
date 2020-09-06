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
//    public function Index()
//    {
//        $formations = Formation::all();
//        $works = Work::all();
//        $experiences = Experience::all();
//
//        return view('/admin.dashboard', compact('formations', 'works', 'experiences'));
//    }
//    public function fEdit($id)
//    {
//        $formation = Formation::findOrFail($id);
//        return view('/admin.dashboard', compact('formation'));
//    }
//
//    public function fUpdate(Request $request, $id)
//    {
//        $formation = Formation::findOrFail($id);
//
//        $formation->certificate = $request->certificate;
//        $formation->obtained = $request->obtained;
//        $formation->description = $request->description;
//
//        $formation->save();
//
//        return redirect()->back()->with('success', 'Formation has been updated');
//    }

}
