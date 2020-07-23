<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\produk;

class indexController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
        public function index()
    {
        $produk=DB::table('produk')->get();
        return view('index.index', ['produk' => $produk]);
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
    public function store(Request $request)
    {
        produk::create([
            'nama_produk'=> $request -> nama_produk,
            'keterangan'=> $request -> keterangan,
            'harga'=> $request -> harga,
            'jumlah'=> $request -> jumlah,]);
        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(produk $produk)
    {
        
        return view('index.edit', compact('produk'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,produk $produk)
    {

        produk::where('id',$produk ->id) -> update([
            'nama_produk' => $request ->nama_produk,
            'keterangan' => $request ->keterangan,
            'harga' => $request ->harga,
            'jumlah' => $request ->jumlah,

        ]);
        return redirect('/') -> with('success','data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(produk $produk)
    {
        produk::destroy($produk -> id);
        return redirect('/');
    }
}
