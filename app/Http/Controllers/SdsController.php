<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use App\Models\Sd;
use App\Http\Requests\SdRequest;

class SdsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function index()
    {
        $sds= Sd::all();
        return view('sds.index', ['sds'=>$sds]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function create()
    {
        return view('sds.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  SdRequest  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(SdRequest $request)
    {
        $sd = new Sd;
		$sd->namaweb = $request->input('namaweb');
		$sd->linkweb = $request->input('linkweb');
		$sd->deskripsi = $request->input('deskripsi');
		$sd->status = $request->input('status');
		$sd->haripemantauan = $request->input('haripemantauan');
		$sd->keterangan = $request->input('keterangan');
        $sd->save();

        return to_route('sds.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\View\View
     */
    public function show($id)
    {
        $sd = Sd::findOrFail($id);
        return view('sds.show',['sd'=>$sd]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\View\View
     */
    public function edit($id)
    {
        $sd = Sd::findOrFail($id);
        return view('sds.edit',['sd'=>$sd]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  SdRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(SdRequest $request, $id)
    {
        $sd = Sd::findOrFail($id);
		$sd->namaweb = $request->input('namaweb');
		$sd->linkweb = $request->input('linkweb');
		$sd->deskripsi = $request->input('deskripsi');
		$sd->status = $request->input('status');
		$sd->haripemantauan = $request->input('haripemantauan');
		$sd->keterangan = $request->input('keterangan');
        $sd->save();

        return to_route('sds.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        $sd = Sd::findOrFail($id);
        $sd->delete();

        return to_route('sds.index');
    }
}
