<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Booking;
use App\Service;
use App\Users;
use Carbon\Carbon;

class BookingController extends Controller
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
    public function create() //create
    {
        // $title = "Make a new Booking";
        // return view('services.create')->with('title', $title);
        $title = 'Create Booking';
        $bookings = new Booking;
        $serviceid = Service::pluck('service_name', 'service_id'); // populates select box on create.blade.php
        $servicename = Service::pluck('service_name', 'service_name'); // populates select box on create.blade.php
        // $servicelength = Service::pluck('service_length', 'service_length'); // populates select box on create.blade.php
        $serviceprice = Service::pluck('service_price', 'service_price'); // populates select box on create.blade.php
        // $userid = Booking::pluck('username', 'user_id');

        // $items = Items::pluck('service_id', 'service_name');
        // $items = Items::all(['service_id', 'service_name']);
        // $items = Items::pluck(['service_id', 'service_name']);
        // $services = new Service;
        // $bookings = Booking::find($id);
        // $services = Service::find($id);
        return view('bookings.create', ['title' => $title,
        'bookings' => $bookings,
        'serviceid' => $serviceid,
        'servicename' => $servicename,
        // 'servicelength' => $servicelength,
        'serviceprice' => $serviceprice
        // 'userid' => $userid
        ]);
        // return view('services.create')->with('title', $title);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $this->validate($request, [
        //     'created_at' => 'required',
        //     'updated_at' => 'required',
        //     'service_id' => 'required',
        //     'service_price' => 'required',
        //     'service_length' => 'required'
        // ]);
        $bookings = new Booking;
        $services = new Service;
        $bookings->user_id = auth()->user()->id;
        $bookings->username = auth()->user()->username;
        $bookings->firstname = auth()->user()->firstname;
        $bookings->surname = auth()->user()->surname;
        $bookings->email = auth()->user()->email;
        // $bookings->service_name = auth()->user()->service_name;
        // $bookings->service_price = auth()->user()->service_price;
        // $bookings->service_length = auth()->user()->service_length;
        
        // $bookings = Booking::find($id);
        // $services = Service::find($id);
        // $bookings->created_at = $request->input('created_at');
        // $bookings->created_at = $request->input('updated_at');
        // $bookings->service_id = $request->input('service_id');
        // $bookings->service_id = $request->input('service_id');
        // $bookings->updated_at = $request->input('updated_at');
        $bookings->service_id = $request->input('service_id');
        $bookings->service_price = $request->input('service_price');
        $bookings->service_length = $request->input('service_length');
        $bookings->save();
        // $services->save();
        return redirect('bookings/create')->with('success', 'Booked slot');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $bookings = Booking::find($id);
        return view('admin.bookings')->with('bookings', $bookings);
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

        // if(auth()->user()->isStaff =='1'){
        //     return view('admin.bookings', ['title' => $title,
        //     'bookings' => $bookings]);
        // }

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
        // $bookings->created_at = $request->input('created_at');
        $bookings->updated_at = $request->input('updated_at');
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
        $bookings = Booking::find($id);
        $bookings->delete();
        return redirect('bookings')->with('success', 'Booking Removed');

    }
}
