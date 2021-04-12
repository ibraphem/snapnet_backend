<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Owner;
use Illuminate\Http\Request;

class OwnerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($owner_type)
    {
        $result = Owner::orderBy('id','DESC')
        ->where('owner_type', '=', $owner_type)
        ->get();
        return $result;
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
    public function store(Request $request, $owner_type)
    {
        $owner = new Owner();
        $owner->asset_owner = $request->asset_owner;
        $owner->owner_type = $owner_type;
        $owner->save();
        $result = Owner::orderBy('id','DESC')
        ->where('owner_type', '=', $owner_type)
        ->get();
        return $result;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Owner  $owner
     * @return \Illuminate\Http\Response
     */
    public function show(Owner $owner)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Owner  $owner
     * @return \Illuminate\Http\Response
     */
    public function edit(Owner $owner)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Owner  $owner
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id, $owner_type)
    {
        $owner = Owner::find($id);
        $owner->asset_owner = $request->asset_owner;
        $owner->owner_type = $owner_type;
        $owner->save();
        $result = Owner::orderBy('id','DESC')
        ->where('owner_type', '=', $owner_type)
        ->get();
        return $result;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Owner  $owner
     * @return \Illuminate\Http\Response
     */
    public function destroy(Owner $owner)
    {
        //
    }
}
