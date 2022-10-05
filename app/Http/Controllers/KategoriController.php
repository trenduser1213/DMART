<?php

namespace App\Http\Controllers;

use App\Models\kategori;
use Illuminate\Http\Request;
// use Illuminate\Foundation\Http\FormRequest;
// use App\Http\Requests\StorekategoriRequest;
// use App\Http\Requests\UpdatekategoriRequest;
use Yajra\Datatables\Datatables;

class KategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('kategori.index');
    }

    public function data()
    {
        $kategori = kategori::orderBy('id_kategori')->get();

        return datatables()
                ->of($kategori)
                ->addIndexColumn()
                ->addColumn('aksi',function($kategori){
                    return '
                        <div class="btn-group">
                            <button class="btn btn-info btn-xs" onclick="editForm(`' . route('kategori.update',$kategori->id_kategori) .'`)"><i class="fa fa-edit"></i></button>
                            <button class="btn btn-danger btn-xs" onclick="hapusData(`'. route('kategori.destroy',$kategori->id_kategori) .'`)"><i class="fa fa-trash"></i></button>
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
     * @param  \App\Http\Requests\StorekategoriRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $kategori = new Kategori();
        // $kategori = $request->nama_kategori;
        // $kategori->save();
        // DB::table('kategori')->insert(['nama_kategori'=>$kategori]);
        // kategori::create([
        //     'nama_kategori'=>$kategori
        // ]);
        $kategori = kategori::create(['nama_kategori'=>$request->nama_kategori]);
        return response()->json('Data Tersimpan',200);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\kategori  $kategori
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $kategori = kategori::find($id);

        return response()->json($kategori);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\kategori  $kategori
     * @return \Illuminate\Http\Response
     */
    public function edit(kategori $kategori)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatekategoriRequest  $request
     * @param  \App\Models\kategori  $kategori
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $kategori = kategori::find($id);
        $kategori->nama_kategori = $request->nama_kategori;
        $kategori->update();
        return response()->json('Data Tersimpan',200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\kategori  $kategori
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $kategori = kategori::find($id);
        $kategori->delete();

        return response(null, 204);
    }
}
