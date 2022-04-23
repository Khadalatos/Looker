<?php

namespace App\Http\Controllers;

use App\Models\iklan;
use App\Http\Requests\StoreiklanRequest;
use App\Http\Requests\UpdateiklanRequest;

class IklanController extends Controller
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
     * @param  \App\Http\Requests\StoreiklanRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreiklanRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\iklan  $iklan
     * @return \Illuminate\Http\Response
     */
    public function show(iklan $iklan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\iklan  $iklan
     * @return \Illuminate\Http\Response
     */
    public function edit(iklan $iklan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateiklanRequest  $request
     * @param  \App\Models\iklan  $iklan
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateiklanRequest $request, iklan $iklan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\iklan  $iklan
     * @return \Illuminate\Http\Response
     */
    public function destroy(iklan $iklan)
    {
        //
    }
}
