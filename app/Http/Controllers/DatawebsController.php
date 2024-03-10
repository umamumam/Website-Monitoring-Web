<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use App\Models\Dataweb;
use App\Http\Requests\DatawebRequest;

class DatawebsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function index()
    {
        $datawebs= Dataweb::all();
        return view('datawebs.index', ['datawebs'=>$datawebs]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function create()
    {
        return view('datawebs.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  DatawebRequest  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(DatawebRequest $request)
    {
        $dataweb = new Dataweb;
		$dataweb->kategori = $request->input('kategori');
		$dataweb->weblayananinfo = $request->input('weblayananinfo');
		$dataweb->webopdpemkot = $request->input('webopdpemkot');
		$dataweb->webkecamatan = $request->input('webkecamatan');
		$dataweb->webkelurahan = $request->input('webkelurahan');
		$dataweb->websmp = $request->input('websmp');
		$dataweb->websd = $request->input('websd');
        $dataweb->save();

        return to_route('datawebs.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\View\View
     */
    public function show($id)
    {
        $dataweb = Dataweb::findOrFail($id);
        return view('datawebs.show',['dataweb'=>$dataweb]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\View\View
     */
    public function edit($id)
    {
        $dataweb = Dataweb::findOrFail($id);
        return view('datawebs.edit',['dataweb'=>$dataweb]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  DatawebRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(DatawebRequest $request, $id)
    {
        $dataweb = Dataweb::findOrFail($id);
		$dataweb->kategori = $request->input('kategori');
		$dataweb->weblayananinfo = $request->input('weblayananinfo');
		$dataweb->webopdpemkot = $request->input('webopdpemkot');
		$dataweb->webkecamatan = $request->input('webkecamatan');
		$dataweb->webkelurahan = $request->input('webkelurahan');
		$dataweb->websmp = $request->input('websmp');
		$dataweb->websd = $request->input('websd');
        $dataweb->save();

        return to_route('datawebs.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        $dataweb = Dataweb::findOrFail($id);
        $dataweb->delete();

        return to_route('datawebs.index');
    }
}
