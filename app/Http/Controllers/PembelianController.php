<?php

namespace App\Http\Controllers;

use App\Models\pembelian;
use App\Http\Requests\StorepembelianRequest;
use App\Http\Requests\UpdatepembelianRequest;

class PembelianController extends Controller
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
     * @param  \App\Http\Requests\StorepembelianRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorepembelianRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\pembelian  $pembelian
     * @return \Illuminate\Http\Response
     */
    public function show(pembelian $pembelian)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\pembelian  $pembelian
     * @return \Illuminate\Http\Response
     */
    public function edit(pembelian $pembelian)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatepembelianRequest  $request
     * @param  \App\Models\pembelian  $pembelian
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatepembelianRequest $request, pembelian $pembelian)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\pembelian  $pembelian
     * @return \Illuminate\Http\Response
     */
    public function destroy(pembelian $pembelian)
    {
        //
    }
}
