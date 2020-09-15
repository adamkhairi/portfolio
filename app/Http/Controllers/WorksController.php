<?php

namespace App\Http\Controllers;

use App\Work;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Redirector;
use Illuminate\Validation\ValidationException;
use Illuminate\View\View;

class WorksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|Response|View
     */
    public function index()
    {
//        $works = Work::all();
//        $topWorks = Work::orderBy('rating', 'DESC')->take(4)->get();
//
//        return view('work.works', compact('works', 'topWorks'));

        $works = Work::latest()->paginate(6);
        return view('work.works', compact('works'))->with('i', (request()->input('page', 1) - 1) * 4);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return Application|Factory|View|void
     */
    public function create()
    {
        return view('work.add-work');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return Application|RedirectResponse|Response|Redirector
     * @throws ValidationException
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|string',
            'img' => 'required',
            'description' => 'required',

        ]);
        if ($request->hasFile('img')) {
            $img = $request->file('img');
            $name = $img->getClientOriginalName();
            $img->move(public_path() . '/img/', $name);
            $name = '/img/' . $name;
//            dd($name);
        }

        $work = new Work();
        $work->name = $request->name;
        $work->img = $name;
        $work->description = $request->description;
        $work->category_id = $request->category_id;
        $work->rating = $request->rating;

        $work->save();

        return redirect('/works')->with('Success', 'Work has been added');
    }

    /**
     * Display the specified resource.
     *
     * @param $id
     * @return Application|Factory|Response|View
     */
    public function show($id)
    {
        $work = Work::findOrFail($id);
        return view('work.show-work', compact('work'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param $id
     * @return Application|Factory|Response|View
     */
    public function edit($id)
    {
        $work = Work::findOrFail($id);
        return view('work.update-sec', compact('work'));

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
        $work = Work::findOrFail($id);

        if ($request->hasFile('img')) {
            $img = $request->file('img');
            $name = $img->getClientOriginalName();
            $img->move(public_path() . '/img/', $name);
            $name = '/img/' . $name;

        }

//        $work = new Work();
        $work->name = $request->name;
        $work->img = $name;
        $work->description = $request->descriptione;
        $work->rating = $request->rating;

        $work->save();
        return redirect()->back()->with('success', 'Work updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param $id
     * @return Application|RedirectResponse|Response|Redirector
     */
    public function destroy($id)
    {
        $work = Work::findOrFail($id);

        $work->delete();

        return redirect('work.works')->with('success', 'Work has been Deleted');
    }
}
