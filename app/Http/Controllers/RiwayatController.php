<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaksi;
use App\Models\Barang;
use App\Models\User;
use RealRashid\SweetAlert\Facades\Alert;


class RiwayatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $user = auth()->id();
        $transaksi = Transaksi::where('id_user', $user)->get();
        return view('frontEnd.page.history',compact('transaksi'));
    }
    public function cencel($id)
    {
        $transaksi = Transaksi::findOrFail($id);
        $transaksi->status = 'Cencel';
        $transaksi->save();
        if ($transaksi->id_barang) {
            $barang = Barang::findOrFail($transaksi->id_barang);
            $barang->stok_barang = $barang->stok_barang + $transaksi->jumlah;
            $barang->save();
        }
        Alert::toast('Pesan berhasil', 'success')->autoClose(2000);
        return back();
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
        //
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
    public function edit($id)
    {
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
