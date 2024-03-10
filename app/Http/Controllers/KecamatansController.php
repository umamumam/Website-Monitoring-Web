<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use App\Models\Kecamatan;
use App\Http\Requests\KecamatanRequest;

class KecamatansController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function index()
    {
        $kecamatans= Kecamatan::all();
        return view('kecamatans.index', ['kecamatans'=>$kecamatans]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function create()
    {
        return view('kecamatans.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  KecamatanRequest  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(KecamatanRequest $request)
    {
        $kecamatan = new Kecamatan;
		$kecamatan->namaweb = $request->input('namaweb');
		$kecamatan->linkweb = $request->input('linkweb');
		$kecamatan->deskripsi = $request->input('deskripsi');
		$kecamatan->status = $request->input('status');
		$kecamatan->haripemantauan = $request->input('haripemantauan');
		$kecamatan->keterangan = $request->input('keterangan');
        $kecamatan->save();

        return to_route('kecamatans.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\View\View
     */
    public function show($id)
    {
        $kecamatan = Kecamatan::findOrFail($id);
        return view('kecamatans.show',['kecamatan'=>$kecamatan]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\View\View
     */
    public function edit($id)
    {
        $kecamatan = Kecamatan::findOrFail($id);
        return view('kecamatans.edit',['kecamatan'=>$kecamatan]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  KecamatanRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(KecamatanRequest $request, $id)
    {
        $kecamatan = Kecamatan::findOrFail($id);
		$kecamatan->namaweb = $request->input('namaweb');
		$kecamatan->linkweb = $request->input('linkweb');
		$kecamatan->deskripsi = $request->input('deskripsi');
		$kecamatan->status = $request->input('status');
		$kecamatan->haripemantauan = $request->input('haripemantauan');
		$kecamatan->keterangan = $request->input('keterangan');
        $kecamatan->save();

        return to_route('kecamatans.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        $kecamatan = Kecamatan::findOrFail($id);
        $kecamatan->delete();

        return to_route('kecamatans.index');
    }
}
