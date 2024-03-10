<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use App\Models\Kategoriweb;
use App\Http\Requests\KategoriwebRequest;

class KategoriwebsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function index()
    {
        $kategoriwebs= Kategoriweb::all();
        return view('kategoriwebs.index', ['kategoriwebs'=>$kategoriwebs]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function create()
    {
        return view('kategoriwebs.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  KategoriwebRequest  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(KategoriwebRequest $request)
    {
        $kategoriweb = new Kategoriweb;
		$kategoriweb->weblayanandaninfo = $request->input('weblayanandaninfo');
		$kategoriweb->webopdpemkot = $request->input('webopdpemkot');
		$kategoriweb->webkecamatan = $request->input('webkecamatan');
		$kategoriweb->webkelurahan = $request->input('webkelurahan');
		$kategoriweb->websmp = $request->input('websmp');
		$kategoriweb->websd = $request->input('websd');
        $kategoriweb->save();

        return to_route('kategoriwebs.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\View\View
     */
    public function show($id)
    {
        $kategoriweb = Kategoriweb::findOrFail($id);
        return view('kategoriwebs.show',['kategoriweb'=>$kategoriweb]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\View\View
     */
    public function edit($id)
    {
        $kategoriweb = Kategoriweb::findOrFail($id);
        return view('kategoriwebs.edit',['kategoriweb'=>$kategoriweb]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  KategoriwebRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(KategoriwebRequest $request, $id)
    {
        $kategoriweb = Kategoriweb::findOrFail($id);
		$kategoriweb->weblayanandaninfo = $request->input('weblayanandaninfo');
		$kategoriweb->webopdpemkot = $request->input('webopdpemkot');
		$kategoriweb->webkecamatan = $request->input('webkecamatan');
		$kategoriweb->webkelurahan = $request->input('webkelurahan');
		$kategoriweb->websmp = $request->input('websmp');
		$kategoriweb->websd = $request->input('websd');
        $kategoriweb->save();

        return to_route('kategoriwebs.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        $kategoriweb = Kategoriweb::findOrFail($id);
        $kategoriweb->delete();

        return to_route('kategoriwebs.index');
    }
}
