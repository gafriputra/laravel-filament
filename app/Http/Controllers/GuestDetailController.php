<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreGuestDetailRequest;
use App\Http\Requests\UpdateGuestDetailRequest;
use App\Models\GuestDetail;

class GuestDetailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Http\Requests\StoreGuestDetailRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreGuestDetailRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\GuestDetail  $guestDetail
     * @return \Illuminate\Http\Response
     */
    public function show(GuestDetail $guestDetail)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\GuestDetail  $guestDetail
     * @return \Illuminate\Http\Response
     */
    public function edit(GuestDetail $guestDetail)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateGuestDetailRequest  $request
     * @param  \App\Models\GuestDetail  $guestDetail
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateGuestDetailRequest $request, GuestDetail $guestDetail)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\GuestDetail  $guestDetail
     * @return \Illuminate\Http\Response
     */
    public function destroy(GuestDetail $guestDetail)
    {
        //
    }
}
