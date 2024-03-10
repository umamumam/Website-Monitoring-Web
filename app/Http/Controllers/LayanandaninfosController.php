<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use App\Models\Layanandaninfo;
use App\Http\Requests\LayanandaninfoRequest;

class LayanandaninfosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function index()
    {
        $layanandaninfos= Layanandaninfo::all();
        return view('layanandaninfos.index', ['layanandaninfos'=>$layanandaninfos]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function create()
    {
        return view('layanandaninfos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  LayanandaninfoRequest  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(LayanandaninfoRequest $request)
    {
        $layanandaninfo = new Layanandaninfo;
		$layanandaninfo->namaweb = $request->input('namaweb');
		$layanandaninfo->linkweb = $request->input('linkweb');
		$layanandaninfo->deskripsi = $request->input('deskripsi');
		$layanandaninfo->status = $request->input('status');
		$layanandaninfo->haripemantauan = $request->input('haripemantauan');
		$layanandaninfo->keterangan = $request->input('keterangan');
        $layanandaninfo->save();

        return to_route('layanandaninfos.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\View\View
     */
    public function show($id)
    {
        $layanandaninfo = Layanandaninfo::findOrFail($id);
        return view('layanandaninfos.show',['layanandaninfo'=>$layanandaninfo]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\View\View
     */
    public function edit($id)
    {
        $layanandaninfo = Layanandaninfo::findOrFail($id);
        return view('layanandaninfos.edit',['layanandaninfo'=>$layanandaninfo]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  LayanandaninfoRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(LayanandaninfoRequest $request, $id)
    {
        $layanandaninfo = Layanandaninfo::findOrFail($id);
		$layanandaninfo->namaweb = $request->input('namaweb');
		$layanandaninfo->linkweb = $request->input('linkweb');
		$layanandaninfo->deskripsi = $request->input('deskripsi');
		$layanandaninfo->status = $request->input('status');
		$layanandaninfo->haripemantauan = $request->input('haripemantauan');
		$layanandaninfo->keterangan = $request->input('keterangan');
        $layanandaninfo->save();

        return to_route('layanandaninfos.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        $layanandaninfo = Layanandaninfo::findOrFail($id);
        $layanandaninfo->delete();

        return to_route('layanandaninfos.index');
    }
}
