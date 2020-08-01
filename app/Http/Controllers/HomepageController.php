<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
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
            'text_description' => 'required',
            'right_image' => 'image|nullable|max:1999',
            'cover_image' => 'image|nullable|max:1999',
            'cover_image2' => 'image|nullable|max:1999',
            'cover_image3' => 'image|nullable|max:1999'
        ]);

        // Right side image on index page
        if($request->hasFile('right_image')){
            // Get filename with extension
            $filenameWithExt = $request->file('right_image')->getClientOriginalName();
            // Get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            // Get just ext
            $extension = $request->file('right_image')->getClientOriginalExtension();
            // Filename to store
            $fileNameToStore = $filename.'_'.time().'.'.$extension;
            // Upload image
            $path = $request->file('right_image')->storeAs('public/homepage_images', $fileNameToStore);
        }

        // Carousel cover image
        if($request->hasFile('cover_image')){
            // Get filename with extension
            $filenameWithExt = $request->file('cover_image')->getClientOriginalName();
            // Get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            // Get just ext
            $extension = $request->file('cover_image')->getClientOriginalExtension();
            // Filename to store
            $fileNameToStore = $filename.'_'.time().'.'.$extension;
            // Upload image
            $path = $request->file('cover_image')->storeAs('public/carousel_images', $fileNameToStore);
        }

        // Carousel cover image 2
        if($request->hasFile('cover_image2')){
            $filenameWithExt = $request->file('cover_image2')->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('cover_image2')->getClientOriginalExtension();
            $fileNameToStore = $filename.'_'.time().'.'.$extension;
            $path = $request->file('cover_image2')->storeAs('public/carousel_images2', $fileNameToStore);
        }

        // Carousel cover image 3
        if($request->hasFile('cover_image3')){
            $filenameWithExt = $request->file('cover_image3')->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('cover_image3')->getClientOriginalExtension();
            $fileNameToStore = $filename.'_'.time().'.'.$extension;
            $path = $request->file('cover_image3')->storeAs('public/carousel_images3', $fileNameToStore);
        }

        $homepages = Homepage::find($id);
        $homepages->text_heading = $request->input('text_heading');
        $homepages->text_description = $request->input('text_description');
        $homepages->cover_heading = $request->input('cover_heading');
        $homepages->cover_description = $request->input('cover_description');
        $homepages->cover_heading2 = $request->input('cover_heading2');
        $homepages->cover_description2 = $request->input('cover_description2');
        $homepages->cover_heading3 = $request->input('cover_heading3');
        $homepages->cover_description3 = $request->input('cover_description3');

        
        if($request->hasFile('right_image')){
            Storage::delete('public/homepage_images/'.$homepages->right_image);
            $homepages->right_image = $fileNameToStore;
        }

        if($request->hasFile('cover_image')){
            Storage::delete('public/carousel_images/'.$homepages->cover_image);
            $homepages->cover_image = $fileNameToStore;
        }

        if($request->hasFile('cover_image2')){
            Storage::delete('public/carousel_images2/'.$homepages->cover_image2);
            $homepages->cover_image2 = $fileNameToStore;
        }

        if($request->hasFile('cover_image3')){
            Storage::delete('public/carousel_images3/'.$homepages->cover_image3);
            $homepages->cover_image3 = $fileNameToStore;
        }

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
