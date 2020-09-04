<?php

namespace App\Http\Controllers;

use App\Formation;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Redirector;
use Illuminate\Validation\ValidationException;
use Illuminate\View\View;

class FormationsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|Response|View
     */
    public function index()
    {
        $formations = Formation::all();
        return view('formation.formations', compact('formations'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Application|Factory|Response|View
     */
    public function create()
    {
        return view('formation.add-form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return Application|RedirectResponse|Redirector|void
     * @throws ValidationException
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'certificate' => 'required',
            'school' => 'required',
            'obtained' => 'required',
            'description' => 'required',
        ]);

        $formation = new Formation();
        $formation->certificate = $request->certificate;
        $formation->school = $request->school;
        $formation->obtained = $request->obtained;
        $formation->description = $request->description;

        $formation->save();
        return redirect('/formations')->with('success', 'Formation Added Successfuly');

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param $id
     * @return Application|Factory|Response|View
     */
    public function edit($id)
    {
        $formation = Formation::findOrFail($id);
        return view('formation.update-form', compact('formation'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param $id
     * @return RedirectResponse
     */
    public function update(Request $request, $id)
    {
        $formation = Formation::findOrFail($id);

        $formation->certificate = $request->certificate;
        $formation->obtained = $request->obtained;
        $formation->description = $request->description;

        $formation->save();

        return redirect()->back()->with('success', 'Formation has been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param $id
     * @return Application|RedirectResponse|Response|Redirector
     */
    public function destroy($id)
    {
        $formation = Formation::findOrFail($id);

        $formation->delete();

        return redirect('formations.index')->with('success', 'Formation deleted successfully');
    }

}
