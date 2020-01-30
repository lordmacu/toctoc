<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\Anounce;
use Illuminate\Http\Request;

class AnouncesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        $keyword = $request->get('search');
        $perPage = 25;

        if (!empty($keyword)) {
            $anounces = Anounce::where('title', 'LIKE', "%$keyword%")
                ->orWhere('description', 'LIKE', "%$keyword%")
                ->orWhere('status_id', 'LIKE', "%$keyword%")
                ->orWhere('start_end_anounce', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $anounces = Anounce::latest()->paginate($perPage);
        }

        return view('admin.anounces.index', compact('anounces'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.anounces.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        $this->validate($request, [
			'title' => 'required|max:10',
			'description' => 'required|max:10'
		]);
        $requestData = $request->all();
        
        Anounce::create($requestData);

        return redirect('admin/anounces')->with('flash_message', 'Anounce added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        $anounce = Anounce::findOrFail($id);

        return view('admin.anounces.show', compact('anounce'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        $anounce = Anounce::findOrFail($id);

        return view('admin.anounces.edit', compact('anounce'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
			'title' => 'required|max:10',
			'description' => 'required|max:10'
		]);
        $requestData = $request->all();
        
        $anounce = Anounce::findOrFail($id);
        $anounce->update($requestData);

        return redirect('admin/anounces')->with('flash_message', 'Anounce updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        Anounce::destroy($id);

        return redirect('admin/anounces')->with('flash_message', 'Anounce deleted!');
    }
}
