<?php

namespace App\Http\Controllers;

use App\Experience;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Redirector;
use Illuminate\View\View;

class ExperiencesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|Response|View
     */
    public function index()
    {
        $exper = Experience::all();
        return view('experience.experiences', compact('exper'));
    }

    public function getExperience()
    {
        $homeExper = Experience::latest(3);
        return view('welcome', compact('homeExper'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return Application|Factory|Response|View
     */
    public function create()
    {
        return view('experience.add-exper');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return Application|RedirectResponse|Response|Redirector
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'company' => 'required',
            'logo' => 'required',
            'post' => 'required',
            'description' => 'required',
        ]);

        if ($request->hasFile('logo')) {

            $img = $request->file('logo');
            $name = $img->getClientOriginalName();
            $img->move(public_path() . '/img/', $name);
            $name = '/img/' . $name;
//            dd($name);
        }

        $exper = new Experience();
        $exper->company = $request->company;
        $exper->logo = $name;
        $exper->post = $request->post;
        $exper->description = $request->description;

        $exper->save();

        return redirect('/experiences')->with('Success', 'Experience has been added');
    }

    /**
     * Display the specified resource.
     *
     * @param $id
     * @return Application|Factory|Response|View
     */
    public function show($id)
    {
        $exper = Experience::findOdFail($id);
        return view('experience.show-exper', compact('exper'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param $id
     * @return Application|Factory|Response|View
     */
    public function edit($id)
    {
        $exper = Experience::findOdFail($id);
        return view('experience.update-exper', compact('exper'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param $id
     * @return Application|RedirectResponse|Response|Redirector
     */
    public function update(Request $request, $id)
    {
        $exper = Experience::findOrFail($id);

        if ($request->hasFile('logo')) {

            $img = $request->file('logo');
            $name = $img->getClientOriginalName();
            $img->move(public_path() . '/img/', $name);
            $name = '/img/' . $name;
//            dd($name);
        }


        $exper->company = $request->company;
        $exper->logo = $name;
        $exper->post = $request->post;
        $exper->description = $request->description;

        $exper->save();

        return redirect('/experiences')->with('Success', 'Experience has been updated');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param $id
     * @return Application|RedirectResponse|Response|Redirector
     */
    public function destroy($id)
    {
        $exper = Experience::findOrFail($id);
        $exper->delete();
        return redirect('/experiences')->with('Success', 'Experience has been deleted');


    }
}
