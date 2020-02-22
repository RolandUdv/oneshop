<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Staff;

class StaffController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
/**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = "Staff";
        // $staff = Staff::all();
        // $staff = DB::table('staff')->paginate(2);
        $staff = Staff::orderBy('staff_id', 'asc')->paginate(10);
        $staffcount = Staff::count('staff_id');

        return view('admin.staff', ['title' => $title,
        'staff' => $staff,
        'staffcount' => $staffcount]);

        // $staff = Staff::orderBy('created_at', 'desc')->paginate(10);
        // return view('admin.staff')->with('staff', $staff);
        // return view('admin.staff');;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = "Add new Staff member";
        return view('staff.create')->with('title', $title);
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
            'username' => 'required',
            'firstname' => 'required',
            'surname' => 'required',
            'email' => 'required',
            'password' => 'required'
        ]);
        $staff = new Staff;
        $staff->staff_id = $request->input('staff_id');
        $staff->admin_rights = $request->input('admin_rights');
        $staff->username = $request->input('username');
        $staff->firstname = $request->input('firstname');
        $staff->surname = $request->input('surname');
        $staff->staff_dob = $request->input('staff_dob');
        $staff->email = $request->input('email');
        $staff->password = $request->input('password'); //$staff->password = $request->Hash::make('password');
        $staff->phone_no = $request->input('phone_no');
        $staff->save();
        return redirect('staff/create')->with('success', 'Staff Member Created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $staff = Staff::find($id);
        // return view('admin.show')->with('staff', $staff);
        return view('admin.staff')->with('staff', $staff);
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
        $staff = Staff::find($id);
        return view('staff.edit', ['title' => $title,
        'staff' => $staff]);
        // return view('staff.edit')->with('staff', $staff);
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
            'username' => 'required',
            'firstname' => 'required',
            'surname' => 'required',
            'email' => 'required',
            'password' => 'required'
        ]);
        $staff = Staff::find($id);
        // $staff->staff_id = $request->input('staff_id');
        $staff->admin_rights = $request->input('admin_rights');
        $staff->username = $request->input('username');
        $staff->firstname = $request->input('firstname');
        $staff->surname = $request->input('surname');
        $staff->staff_dob = $request->input('staff_dob');
        $staff->email = $request->input('email');
        $staff->password = $request->input('password');
        $staff->phone_no = $request->input('phone_no');
        $staff->save();
        return redirect('staff')->with('success', 'Staff Member Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $staff = Staff::find($id);
        $staff->delete();
        return redirect('staff')->with('success', 'Staff Member Removed');
    }
}
