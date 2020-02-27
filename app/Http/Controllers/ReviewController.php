<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Review;
use App\Users;

class ReviewController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('1');
    }
/**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = "Reviews";
        // $bookings = Booking::orderBy('booking_id', 'asc')->paginate(10);
        // $bookingscount = Booking::count('booking_id');

        return view('admin.reviews')->with('title', $title);
        
        // $reviews = Review::all();
        // return view('pages.index')->with('reviews', $reviews);
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

        $this->validate($request, [
            'rating' => 'required',
            'description' => 'required'
        ]);

        $reviews = new Review;
        $reviews->user_id = auth()->user()->id;
        $reviews->username = auth()->user()->username;
        $reviews->firstname = auth()->user()->firstname;
        $reviews->surname = auth()->user()->surname;
        
        $reviews->rating = $request->input('rating');
        $reviews->description = $request->input('description');
        
        $reviews->save();
        // $services->save();
        return redirect('services')->with('success', 'Your review has been posted');
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
        //
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
        //
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
