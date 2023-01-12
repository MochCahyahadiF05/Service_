<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\Montir;
use App\Models\Service;
use App\Models\Transaksi;
use App\Models\User;
use Auth;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('frontEnd.page.index', compact('barang', 'montir', 'service'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $barang = Barang::all();
        $montir = Montir::all();
        $service = Service::all();
        return view('frontEnd.page.index', compact('barang', 'montir', 'service'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama' => 'required',
            'no_polisi' => 'required',
            'tgl_boking' => 'required',
            'id_service' => 'required',
            'jumlah' => 'nullable',
            'alamat' => 'required',
            'no_hp' => 'string',
            'id_user' => 'nullable',
            'id_barang' => 'nullable',
            'id_montir' => 'nullable',
        ]);

        $transaksi = new Transaksi();
        // $barang = Barang::findOrFail($request->id_barang);
        $transaksi->nama = $request->nama;
        $transaksi->id_user = Auth::user()->id;
        $transaksi->no_polisi = $request->no_polisi;
        $transaksi->tgl_boking = $request->tgl_boking;
        $transaksi->id_service = $request->id_service;
        $transaksi->alamat = $request->alamat;
        $transaksi->no_hp = Auth::user()->no_telepon;
        $transaksi->id_montir = $request->id_montir;
        if ($request->id_barang) {
            $transaksi->id_barang = $request->id_barang;
            $transaksi->jumlah = $request->jumlah;
            // dd($request);
        } else {
            $transaksi->id_barang = null;
            $transaksi->jumlah = null;
            // $barang->stok_barang = $barang->stok_barang - $transaksi->jumlah ;
            // dd($request);
        }

        $transaksi->save();

        if ($request->id_barang) {
            $barang = Barang::where('id', $request->id_barang)->first();
            $barang->stok_barang = $barang->stok_barang - $transaksi->jumlah;
            $barang->save();
        }
        // return redirect()->route('service.index');
        // dd($request);
        return back();
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
        //
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
        //
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
