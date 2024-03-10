<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use App\Models\Opdpemkot;
use App\Http\Requests\OpdpemkotRequest;

class OpdpemkotsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function index()
    {
        $opdpemkots= Opdpemkot::all();
        return view('opdpemkots.index', ['opdpemkots'=>$opdpemkots]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function create()
    {
        return view('opdpemkots.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  OpdpemkotRequest  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(OpdpemkotRequest $request)
    {
        $opdpemkot = new Opdpemkot;
		$opdpemkot->namaweb = $request->input('namaweb');
		$opdpemkot->linkweb = $request->input('linkweb');
		$opdpemkot->deskripsi = $request->input('deskripsi');
		$opdpemkot->status = $request->input('status');
		$opdpemkot->haripemantauan = $request->input('haripemantauan');
		$opdpemkot->keterangan = $request->input('keterangan');
        $opdpemkot->save();

        return to_route('opdpemkots.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\View\View
     */
    public function show($id)
    {
        $opdpemkot = Opdpemkot::findOrFail($id);
        return view('opdpemkots.show',['opdpemkot'=>$opdpemkot]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\View\View
     */
    public function edit($id)
    {
        $opdpemkot = Opdpemkot::findOrFail($id);
        return view('opdpemkots.edit',['opdpemkot'=>$opdpemkot]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  OpdpemkotRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(OpdpemkotRequest $request, $id)
    {
        $opdpemkot = Opdpemkot::findOrFail($id);
		$opdpemkot->namaweb = $request->input('namaweb');
		$opdpemkot->linkweb = $request->input('linkweb');
		$opdpemkot->deskripsi = $request->input('deskripsi');
		$opdpemkot->status = $request->input('status');
		$opdpemkot->haripemantauan = $request->input('haripemantauan');
		$opdpemkot->keterangan = $request->input('keterangan');
        $opdpemkot->save();

        return to_route('opdpemkots.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        $opdpemkot = Opdpemkot::findOrFail($id);
        $opdpemkot->delete();

        return to_route('opdpemkots.index');
    }
}
