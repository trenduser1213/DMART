<?php

namespace App\Http\Controllers;

use App\Models\produk;
use Illuminate\Http\Request;
use Yajra\Datatables\Datatables;
// use App\Http\Requests\StoreprodukRequest;
// use App\Http\Requests\UpdateprodukRequest;

class ProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('produk.index');
    }
    public function data()
    {
        $produk = Produk::orderBy('id_Produk')->get();
        // dd($produk);
        return datatables()
                ->of($produk)
                ->addIndexColumn()
                ->addColumn('aksi',function($produk){
                    return '
                        <div class="btn-group">
                            <button class="btn btn-info btn-xs" onclick="editForm(`' . route('produk.update',$produk->id_kategori) .'`)"><i class="fa fa-edit"></i></button>
                            <button class="btn btn-danger btn-xs" onclick="hapusData(`'. route('produk.destroy',$produk->id_kategori) .'`)"><i class="fa fa-trash"></i></button>
                        </div>
                    ';
                })
                ->rawColumns(['aksi'])
                ->make(true);
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
     * @param  \App\Http\Requests\StoreprodukRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreprodukRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\produk  $produk
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $produk = produk::find($id);

        return response()->json($produk);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\produk  $produk
     * @return \Illuminate\Http\Response
     */
    public function edit(produk $produk)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateprodukRequest  $request
     * @param  \App\Models\produk  $produk
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateprodukRequest $request, produk $produk)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\produk  $produk
     * @return \Illuminate\Http\Response
     */
    public function destroy(produk $produk)
    {
        //
    }
}
