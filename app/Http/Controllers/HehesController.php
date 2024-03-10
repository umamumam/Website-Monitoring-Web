<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use App\Models\Hehe;
use App\Http\Requests\HeheRequest;

class HehesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function index()
    {
        $hehes= Hehe::all();
        return view('hehes.index', ['hehes'=>$hehes]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function create()
    {
        return view('hehes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  HeheRequest  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(HeheRequest $request)
    {
        $hehe = new Hehe;
		$hehe->namaweb = $request->input('namaweb');
		$hehe->linkweb = $request->input('linkweb');
		$hehe->deskripsi = $request->input('deskripsi');
		$hehe->status = $request->input('status');
		$hehe->haripemantauan = $request->input('haripemantauan');
		$hehe->keterangan = $request->input('keterangan');
        $hehe->save();

        return to_route('hehes.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\View\View
     */
    public function show($id)
    {
        $hehe = Hehe::findOrFail($id);
        return view('hehes.show',['hehe'=>$hehe]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\View\View
     */
    public function edit($id)
    {
        $hehe = Hehe::findOrFail($id);
        return view('hehes.edit',['hehe'=>$hehe]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  HeheRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(HeheRequest $request, $id)
    {
        $hehe = Hehe::findOrFail($id);
		$hehe->namaweb = $request->input('namaweb');
		$hehe->linkweb = $request->input('linkweb');
		$hehe->deskripsi = $request->input('deskripsi');
		$hehe->status = $request->input('status');
		$hehe->haripemantauan = $request->input('haripemantauan');
		$hehe->keterangan = $request->input('keterangan');
        $hehe->save();

        return to_route('hehes.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        $hehe = Hehe::findOrFail($id);
        $hehe->delete();

        return to_route('hehes.index');
    }
}
