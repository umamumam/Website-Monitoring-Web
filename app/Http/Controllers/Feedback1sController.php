<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use App\Models\Feedback1;
use App\Http\Requests\Feedback1Request;

class Feedback1sController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function index()
    {
        $feedback1s= Feedback1::all();
        return view('feedback1s.index', ['feedback1s'=>$feedback1s]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function create()
    {
        return view('feedback1s.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Feedback1Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Feedback1Request $request)
    {
        $feedback1 = new Feedback1;
		$feedback1->nama = $request->input('nama');
		$feedback1->email = $request->input('email');
		$feedback1->tanggal = $request->input('tanggal');
		$feedback1->message = $request->input('message');
        $feedback1->save();

        return to_route('feedback1s.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\View\View
     */
    public function show($id)
    {
        $feedback1 = Feedback1::findOrFail($id);
        return view('feedback1s.show',['feedback1'=>$feedback1]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\View\View
     */
    public function edit($id)
    {
        $feedback1 = Feedback1::findOrFail($id);
        return view('feedback1s.edit',['feedback1'=>$feedback1]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Feedback1Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Feedback1Request $request, $id)
    {
        $feedback1 = Feedback1::findOrFail($id);
		$feedback1->nama = $request->input('nama');
		$feedback1->email = $request->input('email');
		$feedback1->tanggal = $request->input('tanggal');
		$feedback1->message = $request->input('message');
        $feedback1->save();

        return to_route('feedback1s.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        $feedback1 = Feedback1::findOrFail($id);
        $feedback1->delete();

        return to_route('feedback1s.index');
    }
}
