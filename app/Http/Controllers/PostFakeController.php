<?php

namespace App\Http\Controllers;

use App\Models\PostFake;
use App\Http\Requests\StorePostFakeRequest;
use App\Http\Requests\UpdatePostFakeRequest;

class PostFakeController extends Controller
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
     * @param  \App\Http\Requests\StorePostFakeRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePostFakeRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PostFake  $postFake
     * @return \Illuminate\Http\Response
     */
    public function show(PostFake $postFake)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PostFake  $postFake
     * @return \Illuminate\Http\Response
     */
    public function edit(PostFake $postFake)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePostFakeRequest  $request
     * @param  \App\Models\PostFake  $postFake
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePostFakeRequest $request, PostFake $postFake)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PostFake  $postFake
     * @return \Illuminate\Http\Response
     */
    public function destroy(PostFake $postFake)
    {
        //
    }
}
