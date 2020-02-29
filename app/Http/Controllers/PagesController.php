<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Category;
use App\Store;
use App\Staff;
use App\Service;
use App\Users;
// use App\Service;
use App\Booking;
use App\Review;
use App\Opentimes;
use App\Homepage;

class PagesController extends Controller
{
    public function __construct()
    {
        // Accessible pages for people who aren't signed in
        $this->middleware('auth', ['except' => ['index', 'about', 'contact', 'services', 'scan']]);
        // $this->middleware('auth', ['except' => ['index', 'about', 'contact', 'services', 'scan', 'favorites', 'profile']]);
        
        // Authorised for users, staff and admins
        $this->middleware('1', ['except' => ['index', 'about', 'contact', 'services', 'storereview', 'scan', 'history', 'profile']]);

    }

    public function index(){

        // TODO; Fix this
        // Use HomeController index instead of this

        // $title = "Welcome";
        $services = Service::all();
        $homepages = Homepage::all();
        $services = Service::orderBy('service_id', 'asc')->take(5)->get(); // LIMIT 5

        return view('pages.index', ['services' => $services,
        'title' => $title,
        'homepages' => $homepages]);
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
        $reviews = Review::all();
        $stores = Store::all()->take(1); // Limit to 1
        $opentimes = Opentimes::all();
        // $stores = Store::all();

        // $user_id = auth()->user()->id;
        // $reviewuser = Review::where('user_id', $user_id)->count();
        // $services = Service::orderBy('service_name', 'asc');
        $reviews = Review::orderBy('created_at', 'desc')->paginate(10);
        $reviewcount = Review::count('review_id');
        $ratingcount = Review::count('rating');
        $ratingsum = Review::sum('rating'); // Adds up all of the rating fields

        $rating5 = Review::where('rating', 5)->count(); // Counts how many 5 star reviews are there
        $rating4 = Review::where('rating', 4)->count(); // Counts how many 4 star reviews are there
        $rating3 = Review::where('rating', 3)->count(); // Counts how many 3 star reviews are there
        $rating2 = Review::where('rating', 2)->count(); // Counts how many 2 star reviews are there
        $rating1 = Review::where('rating', 1)->count(); // Counts how many 1 star reviews are there

        $avgrating = ($ratingsum) / $ratingcount; // Counts the average rating

        return view('pages.services', ['title' => $title,
        // 'user_id' => $user_id,
        // 'reviewuser' => $reviewuser,
        'bookings' => $bookings,
        'opentimes' => $opentimes,
        'stores' => $stores,
        'reviews' => $reviews,
        'services' => $services,
        'reviewcount' => $reviewcount,
        'avgrating' => $avgrating,
        'ratingcount' => $ratingcount,
        'rating5' => $rating5,
        'rating4' => $rating4,
        'rating3' => $rating3,
        'rating2' => $rating2,
        'rating1' => $rating1,
        'ratingsum' => $ratingsum]);

        // return view('pages.services')->with('title', $title);;
    }

    public function storereview(Request $request){
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

    public function history(){
        // $this->middleware('auth');
        $favtitle = 'Favourites';
        $title = 'Booking History';

        // $user_id = auth()->user('id');
        $user_id = auth()->user()->id;
        $bookings = Booking::where('user_id', $user_id)->get();
        // $historycount = Booking::count('user_id', $user_id);
 
        return view('pages.history', ['title' => $title,
        'favtitle' => $favtitle,
        // 'historycount' => $historycount,
        'user_id' => $user_id,
        'bookings' => $bookings]);
    }


    public function profile(){
        // $this->middleware('auth');
        $title = 'Profile page';

        // $user_id = auth()->user('id');
        $id = auth()->user()->id;
        $users = Users::where('id', $id)->get();
 
        return view('pages.profile', ['title' => $title,
        'id' => $id,
        'users' => $users]);

        // $id = auth()->user('id');

        // return view('pages.profile', ['title' => $title,
        // 'id' => $id]);

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

    public function support(){
        $this->middleware('1');
        $title = 'Support & FAQ';
        return view('admin.support')->with('title', $title);;
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

    public function generateqr(){
        $title = 'QR Code generator';
        return view('admin.generateqr')->with('title', $title);;
    }
    
}
