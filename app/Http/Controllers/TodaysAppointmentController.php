<?php

namespace App\Http\Controllers;

use App\Models\TodaysAppointment;
use Illuminate\Http\Request;

class TodaysAppointmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.Dashboard.todays-appointment');
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
     * @param  \App\Models\TodaysAppointment  $todaysAppointment
     * @return \Illuminate\Http\Response
     */
    public function show(TodaysAppointment $todaysAppointment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TodaysAppointment  $todaysAppointment
     * @return \Illuminate\Http\Response
     */
    public function edit(TodaysAppointment $todaysAppointment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\TodaysAppointment  $todaysAppointment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TodaysAppointment $todaysAppointment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TodaysAppointment  $todaysAppointment
     * @return \Illuminate\Http\Response
     */
    public function destroy(TodaysAppointment $todaysAppointment)
    {
        //
    }
}
