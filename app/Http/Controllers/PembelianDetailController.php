<?php

namespace App\Http\Controllers;

use App\Models\pembelian_detail;
use App\Http\Requests\Storepembelian_detailRequest;
use App\Http\Requests\Updatepembelian_detailRequest;

class PembelianDetailController extends Controller
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
     * @param  \App\Http\Requests\Storepembelian_detailRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Storepembelian_detailRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\pembelian_detail  $pembelian_detail
     * @return \Illuminate\Http\Response
     */
    public function show(pembelian_detail $pembelian_detail)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\pembelian_detail  $pembelian_detail
     * @return \Illuminate\Http\Response
     */
    public function edit(pembelian_detail $pembelian_detail)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Updatepembelian_detailRequest  $request
     * @param  \App\Models\pembelian_detail  $pembelian_detail
     * @return \Illuminate\Http\Response
     */
    public function update(Updatepembelian_detailRequest $request, pembelian_detail $pembelian_detail)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\pembelian_detail  $pembelian_detail
     * @return \Illuminate\Http\Response
     */
    public function destroy(pembelian_detail $pembelian_detail)
    {
        //
    }
}
