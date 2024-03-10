<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use App\Models\Kelurahan;
use App\Http\Requests\KelurahanRequest;

class KelurahansController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function index()
    {
        $kelurahans= Kelurahan::all();
        return view('kelurahans.index', ['kelurahans'=>$kelurahans]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function create()
    {
        return view('kelurahans.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  KelurahanRequest  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(KelurahanRequest $request)
    {
        $kelurahan = new Kelurahan;
		$kelurahan->namaweb = $request->input('namaweb');
		$kelurahan->linkweb = $request->input('linkweb');
		$kelurahan->deskripsi = $request->input('deskripsi');
		$kelurahan->status = $request->input('status');
		$kelurahan->haripemantauan = $request->input('haripemantauan');
		$kelurahan->keterangan = $request->input('keterangan');
        $kelurahan->save();

        return to_route('kelurahans.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\View\View
     */
    public function show($id)
    {
        $kelurahan = Kelurahan::findOrFail($id);
        return view('kelurahans.show',['kelurahan'=>$kelurahan]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\View\View
     */
    public function edit($id)
    {
        $kelurahan = Kelurahan::findOrFail($id);
        return view('kelurahans.edit',['kelurahan'=>$kelurahan]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  KelurahanRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(KelurahanRequest $request, $id)
    {
        $kelurahan = Kelurahan::findOrFail($id);
		$kelurahan->namaweb = $request->input('namaweb');
		$kelurahan->linkweb = $request->input('linkweb');
		$kelurahan->deskripsi = $request->input('deskripsi');
		$kelurahan->status = $request->input('status');
		$kelurahan->haripemantauan = $request->input('haripemantauan');
		$kelurahan->keterangan = $request->input('keterangan');
        $kelurahan->save();

        return to_route('kelurahans.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        $kelurahan = Kelurahan::findOrFail($id);
        $kelurahan->delete();

        return to_route('kelurahans.index');
    }
}
