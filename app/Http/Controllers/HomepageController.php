<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Homepage;

class HomepageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = "Homepage";

        $homepages = Homepage::all();

        return view('admin.homepage', ['title' => $title,
        'homepages' => $homepages]);
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
        $title = 'Edit Homepage';
        $homepages = Homepage::find($id);
        return view('homepage.edit', ['title' => $title,
        'homepages' => $homepages]);
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
            'text_heading' => 'required',
            'text_description' => 'required'
        ]);
        $homepages = Homepage::find($id);
        $homepages->text_heading = $request->input('text_heading');
        $homepages->text_description = $request->input('text_description');
        // $opentimes->updated_at = $request->input('updated_at');
        $homepages->save();
        return redirect('homepage')->with('success', 'Homepage Updated');
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
