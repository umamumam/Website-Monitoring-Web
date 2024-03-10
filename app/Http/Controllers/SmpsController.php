<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use App\Models\Smp;
use App\Http\Requests\SmpRequest;

class SmpsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function index()
    {
        $smps= Smp::all();
        return view('smps.index', ['smps'=>$smps]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function create()
    {
        return view('smps.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  SmpRequest  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(SmpRequest $request)
    {
        $smp = new Smp;
		$smp->namaweb = $request->input('namaweb');
		$smp->linkweb = $request->input('linkweb');
		$smp->deskripsi = $request->input('deskripsi');
		$smp->status = $request->input('status');
		$smp->haripemantauan = $request->input('haripemantauan');
		$smp->keterangan = $request->input('keterangan');
        $smp->save();

        return to_route('smps.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\View\View
     */
    public function show($id)
    {
        $smp = Smp::findOrFail($id);
        return view('smps.show',['smp'=>$smp]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\View\View
     */
    public function edit($id)
    {
        $smp = Smp::findOrFail($id);
        return view('smps.edit',['smp'=>$smp]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  SmpRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(SmpRequest $request, $id)
    {
        $smp = Smp::findOrFail($id);
		$smp->namaweb = $request->input('namaweb');
		$smp->linkweb = $request->input('linkweb');
		$smp->deskripsi = $request->input('deskripsi');
		$smp->status = $request->input('status');
		$smp->haripemantauan = $request->input('haripemantauan');
		$smp->keterangan = $request->input('keterangan');
        $smp->save();

        return to_route('smps.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        $smp = Smp::findOrFail($id);
        $smp->delete();

        return to_route('smps.index');
    }
}
