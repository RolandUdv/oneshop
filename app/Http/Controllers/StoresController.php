<?php
// php artisan make:controller PostsController --resource
namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Store;

class StoresController extends Controller
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
        // using DB to paginate all store posts
        // $stores = DB::table('stores')->paginate(1);
        // $stores = Store::orderBy('title', 'desc')->get(); // ORDER BY DESC

        // $stores = Store::where('title', 'Ace of Facez')->get(); // WHERE

        // $stores = Store::orderBy('title', 'desc')->take(1)->get(); // LIMIT 1

        //$stores = Store::orderBy('store_name', 'asc')->paginate(1); // PAGINATION

        //return view('stores.smallstore')->with('stores', $stores);

        //return view('pages.index')->with('posts', $posts);

        // without using DB, paginate all store posts
        //$stores = Store::all();
        //return view('stores.smallstore')->with('stores', $stores);
        $title = 'Store information';
        $stores = Store::all();
        
        return view('admin.store_information', ['title' => $title,
        'stores' => $stores]);


        //return view('pages.index', ['stores' => $stores]);
        //return Store::make('stores')->with('stores', $stores);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('stores.create');
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
        //return Store::find($id);
        $store = Store::find($id);
        return view('stores.show')->with('store', $store);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $title = 'Edit Staff Member';
        $stores = Store::find($id);
        return view('store.edit', ['title' => $title,
        'stores' => $stores]);
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
            'store_name' => 'required',
            'owner_name' => 'required',
            'phone_no' => 'required',
            'house_no' => 'required',
            'address' => 'required',
            'city' => 'required',
            'county' => 'required',
            'country' => 'required',
            'postcode' => 'required'
        ]);
        $stores = Store::find($id);
        $stores->store_name = $request->input('store_name');
        $stores->store_information = $request->input('store_information');
        $stores->owner_name = $request->input('owner_name');
        $stores->phone_no = $request->input('phone_no');
        $stores->house_no = $request->input('house_no');
        $stores->address = $request->input('address');
        $stores->city = $request->input('city');
        $stores->county = $request->input('county');
        $stores->country = $request->input('country');
        $stores->postcode = $request->input('postcode');
        $stores->save();
        return redirect('store_information')->with('success', 'Store Information Updated');
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
