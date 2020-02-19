<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Booking;
use Carbon\Carbon;

class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = "Bookings";
        $bookings = Booking::all();
        $bookings = Booking::orderBy('created_at', 'desc')->paginate(10);
        $bookingscount = Booking::count('booking_id');

        return view('admin.bookings', ['title' => $title,
        'bookings' => $bookings,
        'bookingscount' => $bookingscount
        ]);

        // $bookings = Booking::orderBy('booking_id', 'asc')->paginate(10);
        // $bookingscount = Booking::count('booking_id');

        // return view('admin.bookings')->with('title', $title);

        // return view('admin.bookings', ['title' => $title,
        // 'bookings' => $bookings,
        // 'bookingscount' => $bookingscount]);
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
        $title = 'Edit Booking';
        $bookings = Booking::find($id);
        return view('bookings.edit', ['title' => $title,
        'bookings' => $bookings]);
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
        // $this->validate($request, [
        //     'created_at' => 'required'
        //     'updated_at' => 'required',
        //     'service_id' => 'required',
        //     'service_price' => 'required',
        //     'service_length' => 'required'
        // ]);
        $bookings = Booking::find($id);
        $bookings->created_at = $request->input('created_at');
        // $bookings->updated_at = $request->input('updated_at');
        // $bookings->service_id = $request->input('service_id');
        // $bookings->service_price = $request->input('service_price');
        // $bookings->service_length = $request->input('service_length');
        $bookings->save();
        return redirect('bookings')->with('success', 'Booking updated');
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
