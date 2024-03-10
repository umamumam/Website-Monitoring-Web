<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use App\Models\Monitoringsistem;
use App\Http\Requests\MonitoringsistemRequest;

class MonitoringsistemsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function index()
    {
        $monitoringsistems= Monitoringsistem::all();
        return view('monitoringsistems.index', ['monitoringsistems'=>$monitoringsistems]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function create()
    {
        return view('monitoringsistems.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  MonitoringsistemRequest  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(MonitoringsistemRequest $request)
    {
        $monitoringsistem = new Monitoringsistem;
		$monitoringsistem->namaweb = $request->input('namaweb');
		$monitoringsistem->linkweb = $request->input('linkweb');
		$monitoringsistem->kategori = $request->input('kategori');
		$monitoringsistem->tampilanui = $request->input('tampilanui');
		$monitoringsistem->responsifbutton = $request->input('responsifbutton');
		$monitoringsistem->cms = $request->input('cms');
		$monitoringsistem->jeniscms = $request->input('jeniscms');
		$monitoringsistem->bahasapemrograman = $request->input('bahasapemrograman');
		$monitoringsistem->franework = $request->input('franework');
		$monitoringsistem->jenisframework = $request->input('jenisframework');
		$monitoringsistem->webserver = $request->input('webserver');
		$monitoringsistem->jeniswebserver = $request->input('jeniswebserver');
        $monitoringsistem->save();

        return to_route('monitoringsistems.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\View\View
     */
    public function show($id)
    {
        $monitoringsistem = Monitoringsistem::findOrFail($id);
        return view('monitoringsistems.show',['monitoringsistem'=>$monitoringsistem]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\View\View
     */
    public function edit($id)
    {
        $monitoringsistem = Monitoringsistem::findOrFail($id);
        return view('monitoringsistems.edit',['monitoringsistem'=>$monitoringsistem]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  MonitoringsistemRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(MonitoringsistemRequest $request, $id)
    {
        $monitoringsistem = Monitoringsistem::findOrFail($id);
		$monitoringsistem->namaweb = $request->input('namaweb');
		$monitoringsistem->linkweb = $request->input('linkweb');
		$monitoringsistem->kategori = $request->input('kategori');
		$monitoringsistem->tampilanui = $request->input('tampilanui');
		$monitoringsistem->responsifbutton = $request->input('responsifbutton');
		$monitoringsistem->cms = $request->input('cms');
		$monitoringsistem->jeniscms = $request->input('jeniscms');
		$monitoringsistem->bahasapemrograman = $request->input('bahasapemrograman');
		$monitoringsistem->franework = $request->input('franework');
		$monitoringsistem->jenisframework = $request->input('jenisframework');
		$monitoringsistem->webserver = $request->input('webserver');
		$monitoringsistem->jeniswebserver = $request->input('jeniswebserver');
        $monitoringsistem->save();

        return to_route('monitoringsistems.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        $monitoringsistem = Monitoringsistem::findOrFail($id);
        $monitoringsistem->delete();

        return to_route('monitoringsistems.index');
    }
}
