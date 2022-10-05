<?php

namespace App\Http\Controllers;

use App\Models\pengeluaran;
use App\Http\Requests\StorepengeluaranRequest;
use App\Http\Requests\UpdatepengeluaranRequest;

class PengeluaranController extends Controller
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
     * @param  \App\Http\Requests\StorepengeluaranRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorepengeluaranRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\pengeluaran  $pengeluaran
     * @return \Illuminate\Http\Response
     */
    public function show(pengeluaran $pengeluaran)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\pengeluaran  $pengeluaran
     * @return \Illuminate\Http\Response
     */
    public function edit(pengeluaran $pengeluaran)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatepengeluaranRequest  $request
     * @param  \App\Models\pengeluaran  $pengeluaran
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatepengeluaranRequest $request, pengeluaran $pengeluaran)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\pengeluaran  $pengeluaran
     * @return \Illuminate\Http\Response
     */
    public function destroy(pengeluaran $pengeluaran)
    {
        //
    }
}
