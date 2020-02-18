<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Service;

class ServiceController extends Controller
{
/**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = "Services";
        $services = Service::orderBy('service_id', 'asc')->paginate(10);
        $servicescount = Service::count('service_id');

        return view('admin.service', ['title' => $title,
        'services' => $services,
        'servicescount' => $servicescount]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = "Add new Service";
        return view('service.create')->with('title', $title);
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
            'service_name' => 'required',
            'service_description' => 'required',
            'service_price' => 'required'
        ]);
        $services = new Service;
        $services->service_name = $request->input('service_name');
        $services->service_description = $request->input('service_description');
        $services->service_price = $request->input('service_price');
        $services->save();
        return redirect('service/create')->with('success', 'Service Created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $services = Service::find($id);
        return view('admin.service')->with('services', $services);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $title = 'Edit Service';
        $services = Service::find($id);
        return view('service.edit', ['title' => $title,
        'services' => $services]);
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
            'service_name' => 'required',
            'service_description' => 'required',
            'service_price' => 'required'
        ]);
        $services = Service::find($id);
        $services->service_name = $request->input('service_name');
        $services->service_description = $request->input('service_description');
        $services->service_price = $request->input('service_price');
        $services->save();
        return redirect('service')->with('success', 'Service Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $services = Service::find($id);
        $services->delete();
        return redirect('service')->with('success', 'Service Removed');
    }
}
