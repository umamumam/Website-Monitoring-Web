<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use App\Models\Dataweb1;
use App\Http\Requests\Dataweb1Request;

class Dataweb1sController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function index()
    {
        $dataweb1s= Dataweb1::all();
        return view('dataweb1s.index', ['dataweb1s'=>$dataweb1s]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function create()
    {
        return view('dataweb1s.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Dataweb1Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Dataweb1Request $request)
    {
        $dataweb1 = new Dataweb1;
		$dataweb1->kategori = $request->input('kategori');
		$dataweb1->weblayananinfo = $request->input('weblayananinfo');
		$dataweb1->webopdpemkot = $request->input('webopdpemkot');
		$dataweb1->webkecamatan = $request->input('webkecamatan');
		$dataweb1->webkelurahan = $request->input('webkelurahan');
		$dataweb1->websmp = $request->input('websmp');
		$dataweb1->websd = $request->input('websd');
        $dataweb1->save();

        return to_route('dataweb1s.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\View\View
     */
    public function show($id)
    {
        $dataweb1 = Dataweb1::findOrFail($id);
        return view('dataweb1s.show',['dataweb1'=>$dataweb1]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\View\View
     */
    public function edit($id)
    {
        $dataweb1 = Dataweb1::findOrFail($id);
        return view('dataweb1s.edit',['dataweb1'=>$dataweb1]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Dataweb1Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Dataweb1Request $request, $id)
    {
        $dataweb1 = Dataweb1::findOrFail($id);
		$dataweb1->kategori = $request->input('kategori');
		$dataweb1->weblayananinfo = $request->input('weblayananinfo');
		$dataweb1->webopdpemkot = $request->input('webopdpemkot');
		$dataweb1->webkecamatan = $request->input('webkecamatan');
		$dataweb1->webkelurahan = $request->input('webkelurahan');
		$dataweb1->websmp = $request->input('websmp');
		$dataweb1->websd = $request->input('websd');
        $dataweb1->save();

        return to_route('dataweb1s.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        $dataweb1 = Dataweb1::findOrFail($id);
        $dataweb1->delete();

        return to_route('dataweb1s.index');
    }
}
