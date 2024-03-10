<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use App\Models\Manajemenproyek;
use App\Http\Requests\ManajemenproyekRequest;

class ManajemenproyeksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function index()
    {
        $manajemenproyeks= Manajemenproyek::all();
        return view('manajemenproyeks.index', ['manajemenproyeks'=>$manajemenproyeks]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function create()
    {
        return view('manajemenproyeks.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  ManajemenproyekRequest  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(ManajemenproyekRequest $request)
    {
        $manajemenproyek = new Manajemenproyek;
		$manajemenproyek->namaweb = $request->input('namaweb');
		$manajemenproyek->linkweb = $request->input('linkweb');
		$manajemenproyek->kategori = $request->input('kategori');
		$manajemenproyek->tanggaldibuat = $request->input('tanggaldibuat');
		$manajemenproyek->tanggalselesai = $request->input('tanggalselesai');
		$manajemenproyek->danapembuatan = $request->input('danapembuatan');
		$manajemenproyek->programer = $request->input('programer');
		$manajemenproyek->sistemanalist = $request->input('sistemanalist');
		$manajemenproyek->desainer = $request->input('desainer');
		$manajemenproyek->tester = $request->input('tester');
		$manajemenproyek->administrator = $request->input('administrator');
        $manajemenproyek->save();

        return to_route('manajemenproyeks.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\View\View
     */
    public function show($id)
    {
        $manajemenproyek = Manajemenproyek::findOrFail($id);
        return view('manajemenproyeks.show',['manajemenproyek'=>$manajemenproyek]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\View\View
     */
    public function edit($id)
    {
        $manajemenproyek = Manajemenproyek::findOrFail($id);
        return view('manajemenproyeks.edit',['manajemenproyek'=>$manajemenproyek]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  ManajemenproyekRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(ManajemenproyekRequest $request, $id)
    {
        $manajemenproyek = Manajemenproyek::findOrFail($id);
		$manajemenproyek->namaweb = $request->input('namaweb');
		$manajemenproyek->linkweb = $request->input('linkweb');
		$manajemenproyek->kategori = $request->input('kategori');
		$manajemenproyek->tanggaldibuat = $request->input('tanggaldibuat');
		$manajemenproyek->tanggalselesai = $request->input('tanggalselesai');
		$manajemenproyek->danapembuatan = $request->input('danapembuatan');
		$manajemenproyek->programer = $request->input('programer');
		$manajemenproyek->sistemanalist = $request->input('sistemanalist');
		$manajemenproyek->desainer = $request->input('desainer');
		$manajemenproyek->tester = $request->input('tester');
		$manajemenproyek->administrator = $request->input('administrator');
        $manajemenproyek->save();

        return to_route('manajemenproyeks.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        $manajemenproyek = Manajemenproyek::findOrFail($id);
        $manajemenproyek->delete();

        return to_route('manajemenproyeks.index');
    }
}
