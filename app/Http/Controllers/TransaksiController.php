<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;
use App\Models\Barang;
use App\Models\Montir;
use App\Models\Transaksi;
use App\Models\User;
use Validator;
use Auth;
use RealRashid\SweetAlert\Facades\Alert;

class TransaksiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pesan = Transaksi::all();
        $service = Service::all();
        $barang = Barang::all();
        return view('frontEnd.layouts.index', compact('pesan','service','barang'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $pesan = Transaksi::all();
        $service = Service::all();
        $barang = Barang::all();
        return view('frontEnd.page.pesan', compact('pesan','service','barang'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules = [
            'nama'=>'required',
            'no_polisi'=>'required',
            'tgl_boking'=>'required',
            'id_service'=>'required',
            'alamat'=>'required'
        ];
        $messages = [
            'nama.required'=>'nama wajib diisi!',
            'no_polisi.required'=>'wajib diisi!',
            'tgl_boking.required'=>'wajib diisi!',
            'id_service.required'=>'wajib diisi!',
            'alamat.required'=>'wajib diisi!'
        ];

        $validated = Validator::make($request->all(), $rules, $messages);

        $pesan = new Transaksi;
        $barang = Barang::findOrFail($request->id_barang);
        $pesan->nama = $request->nama;
        $pesan->no_polisi = $request->no_polisi;
        $pesan->tgl_boking = $request->tgl_boking;
        $pesan->alamat = $request->alamat;
        $pesan->no_hp = Auth::user()->no_telepon;
        $pesan->id_barang = $request->id_barang;
        $pesan->id_service = $request->id_service;
        $pesan->id_user = Auth::user()->id;
        $pesan->id_montir = $request->id_montir;
        $pesan->jumlah = $request->jumlah;
        $barang->stok_barang = $barang->stok_barang - $pesan->jumlah ;
        $pesan->save();
        $barang->save();
        return redirect()->route('pesan.create');
        
    }
    
    //judul  tujuan fungsi kegunaan

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
