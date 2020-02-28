<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Opentimes;

class OpentimesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = 'Opening & Closing Times';
        $opentimes = Opentimes::all();
        
        return view('admin.opentime', ['title' => $title,
        'opentimes' => $opentimes]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $title = 'Edit Opening & Closing Times';
        $opentimes = Opentimes::find($id);
        return view('opentime.edit', ['title' => $title,
        'opentimes' => $opentimes]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'open_time' => 'required',
            'close_time' => 'required'
        ]);
        $opentimes = Opentimes::find($id);
        $opentimes->open_time = $request->input('open_time');
        $opentimes->close_time = $request->input('close_time');
        // $opentimes->updated_at = $request->input('updated_at');
        $opentimes->save();
        return redirect('opentime')->with('success', 'Store Information Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
