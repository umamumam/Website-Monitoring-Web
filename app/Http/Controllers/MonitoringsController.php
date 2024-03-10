<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use App\Models\Monitoring;
use App\Http\Requests\MonitoringRequest;

class MonitoringsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function index()
    {
        $monitorings= Monitoring::all();
        return view('monitorings.index', ['monitorings'=>$monitorings]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function create()
    {
        return view('monitorings.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  MonitoringRequest  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(MonitoringRequest $request)
    {
        $monitoring = new Monitoring;
		$monitoring->namaweb = $request->input('namaweb');
		$monitoring->linkweb = $request->input('linkweb');
		$monitoring->kategori = $request->input('kategori');
		$monitoring->status = $request->input('status');
		$monitoring->logo = $request->input('logo');
		$monitoring->presentaseupdateberita = $request->input('presentaseupdateberita');
		$monitoring->tanggalupdateterbaru = $request->input('tanggalupdateterbaru');
		$monitoring->terakhirupdate = $request->input('terakhirupdate');
        $monitoring->save();

        return to_route('monitorings.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\View\View
     */
    public function show($id)
    {
        $monitoring = Monitoring::findOrFail($id);
        return view('monitorings.show',['monitoring'=>$monitoring]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\View\View
     */
    public function edit($id)
    {
        $monitoring = Monitoring::findOrFail($id);
        return view('monitorings.edit',['monitoring'=>$monitoring]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  MonitoringRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(MonitoringRequest $request, $id)
    {
        $monitoring = Monitoring::findOrFail($id);
		$monitoring->namaweb = $request->input('namaweb');
		$monitoring->linkweb = $request->input('linkweb');
		$monitoring->kategori = $request->input('kategori');
		$monitoring->status = $request->input('status');
		$monitoring->logo = $request->input('logo');
		$monitoring->presentaseupdateberita = $request->input('presentaseupdateberita');
		$monitoring->tanggalupdateterbaru = $request->input('tanggalupdateterbaru');
		$monitoring->terakhirupdate = $request->input('terakhirupdate');
        $monitoring->save();

        return to_route('monitorings.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        $monitoring = Monitoring::findOrFail($id);
        $monitoring->delete();

        return to_route('monitorings.index');
    }
}
