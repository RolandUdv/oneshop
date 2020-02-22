<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Category;
use App\Store;
use App\Staff;
use App\Service;
// use App\Service;
use App\Booking;

class PagesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index', 'about', 'contact', 'services', 'scan']]);
        // $this->middleware('1', ['except' => ['index', '/about', 'contact', 'profile', 'services', 'scan', 'admin']]);
        $this->middleware('1', ['except' => ['index', 'about', 'contact', 'services', 'scan']]);

    }

    public function index(){
        $title = "Welcome";
        $services = Service::all();
        $services = Service::orderBy('service_id', 'asc')->take(5)->get(); // LIMIT 5

        return view('pages.index', ['title' => $title,
        'services' => $services]);

        // $stores = DB::table('stores')->paginate(1);
        // return view('stores.smallstore', ['stores' => $stores]);

        // return view('pages.index', [
        //     'stores' => Store::withCount('stores')->get()
        // ]);

        // $category = Category::all();
        // return view('pages.index')->with('category', $category);

        // $store = Store::find($id);
        // return view('stores.show')->with('store', $store);

        // $data = array(
        //     'title' => 'Index Page',
        //     'categories' => ['Barber shops','Health & Beauty','etc']
        // );
        // return view('pages.index')->with($data);


        //$stores = Store::all();
        //return view('stores.smallstore')->with('stores', $stores);

        //$stores = DB::table('stores')->paginate(1);
        //return view('pages.index', ['stores' => $stores]);

    }

    public function login(){
        $title = 'Log In';
        return view('pages.login')->with('title', $title);;
    }

    public function register(){
        $title = 'Register';
        return view('pages.register')->with('title', $title);;
    }

    public function services(){
        $title = 'Services';

        $bookings = Booking::all();
        $services = Service::all();
        //$services = Service::orderBy('service_id', 'asc')->take(5)->get(); // LIMIT 5

        return view('pages.services', ['title' => $title,
        'bookings' => $bookings,
        'services' => $services]);

        // return view('pages.services')->with('title', $title);;
    }






    public function about(){
        $title = 'About Us';
        return view('pages.about')->with('title', $title);;
    }

    public function contact(){
        $title = 'Contact Us';
        return view('pages.contact')->with('title', $title);;
    }

    // public function search(){
    //     $title = 'Search page';
    //     return view('pages.search')->with('title', $title);
    // }

    public function scan(){
        $title = 'Scan QR Code';
        return view('pages.scan')->with('title', $title);;
    }

    public function favorites(){
        $title = 'Favorites page / Purchase history';
        return view('pages.favorites', compact('title'));
    }

    public function profile(){
        $title = 'Profile page';
        return view('pages.profile')->with('title', $title);;
    }

    public function store(){
        $title = 'Store page';
        return view('pages.store')->with('title', $title);;
    }

// Admin pages
    public function admin(){
        $this->middleware('1');
        $title = 'Dashboard';
        return view('pages.admin')->with('title', $title);;
        // return view('pages.admin');;
    }

    public function bookings(){
        return view('admin.bookings');;
    }

    public function categories(){
        return view('admin.categories');;
    }

    public function service(){
        return view('admin.service');;
    }

    public function staff(){
        return view('admin.staff');;
    }

    public function users(){
        return view('admin.users');;
    }
    
}
