<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePriorityRequest;
use App\Http\Requests\UpdatePriorityRequest;
use App\Models\Priority;

class PriorityController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePriorityRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Priority $piority)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Priority $piority)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePriorityRequest $request, Priority $piority)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Priority $piority)
    {
        //
    }
}
