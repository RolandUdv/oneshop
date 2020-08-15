<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Users;
use App\Booking;
use App\Review;

class SearchController extends Controller
{
    public function index(Request $request)
    {
        $title = "Admin Dashboard";
        $query = $request->get('query');

        $users = Users::where('username', 'LIKE', "%$query%")
            ->orWhere('firstname', 'LIKE', "%$query%")
            ->orWhere('surname', 'LIKE', "%$query%")
            ->orWhere('email', 'LIKE', "%$query%")
            ->orWhere('created_at', 'LIKE', "%$query%")
            ->get();

        $bookings = Booking::where('username', 'LIKE', "%$query%")
                    ->orWhere('booking_id', 'LIKE', "%$query%")
                    ->orWhere('firstname', 'LIKE', "%$query%")
                    ->orWhere('surname', 'LIKE', "%$query%")
                    ->orWhere('email', 'LIKE', "%$query%")
                    ->orWhere('service_name', 'LIKE', "%$query%")
                    ->orWhere('dateofbooking', 'LIKE', "%$query%")
                    ->orWhere('created_at', 'LIKE', "%$query%")
                    ->orWhere('updated_at', 'LIKE', "%$query%")
                    ->get();

        $reviews = Review::where('review_id', 'LIKE', "%$query%")
                    ->orWhere('user_id', 'LIKE', "%$query%")
                    ->orWhere('username', 'LIKE', "%$query%")
                    ->orWhere('firstname', 'LIKE', "%$query%")
                    ->orWhere('surname', 'LIKE', "%$query%")
                    ->orWhere('description', 'LIKE', "%$query%")
                    ->orWhere('rating', 'LIKE', "%$query%")
                    ->orWhere('created_at', 'LIKE', "%$query%")
                    ->get();


        return view('pages.admin', ['title' => $title,
        'users' => $users,
        'bookings' => $bookings,
        'reviews' => $reviews
        ]);

        // return view('results', compact('users', 'animal');
    }
}
