<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Service;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth', ['except' => 'index', 'scan']);
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $title = "Hello";
        $services = Service::all();
        $services = Service::orderBy('service_id', 'asc')->take(5)->get(); // LIMIT 5
        return view('pages.index', ['title' => $title,
        'services' => $services]);
        // return view('pages.index', ['title' => $title]);
        // return view('pages.index');
    }
}
