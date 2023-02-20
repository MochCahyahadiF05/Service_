<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\Montir;
use App\Models\Transaksi;
use Illuminate\Http\Request;
use PDF;
use RealRashid\SweetAlert\Facades\Alert;

class PDFController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $transaksi = Transaksi::all();
        $barang = Barang::all();
        $montir = Montir::all();
        $barang = Barang::all();
        return view('backEnd.transaksi.laporan', compact('transaksi', 'montir','barang'));
    }
    public function generatePdf()
    {
        $transaksi = Transaksi::all();
        $pdf = PDF::loadView('layouts.pdf', ['transaksi' => $transaksi])->setPaper('a4', 'landscape');
        return $pdf->stream();
    }
    function print(Request $request) {
        $start = $request->tanggal_awal;
        $end = $request->tanggal_akhir;

        if ($end >= $start) {
            $transaksi = Transaksi::whereBetween('tgl_boking', [$start, $end])->get();
            $pdf = PDF::loadview('layouts.pdf', compact('transaksi', 'start', 'end'))->setPaper('a4', 'landscape');
            return $pdf->stream('laporan.pdf');
        } elseif ($end < $start) {
            Alert::error('Tanggal yang anda masukkan tidak valid', 'Oops!')->persistent("Ok");
            return redirect()->back();
        }
        $transaksi = Transaksi::all();
        $montir = Montir::all();
        $barang = Montir::all();
        return compact('transaksi','montir','barang');
    }
    // public function sho1w($id){
    //     $transaksi = Transaksi::where('id')->first();
    //     $barang = Barang::all();
    //     $montir = Montir::all();
    //     $barang = Barang::all();
    //     return view('backEnd.transaksi.struck   ', compact('transaksi', 'montir'));
    // }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $transaksi = Transaksi::findOrFail($id);
        return view('backEnd.transaksi.struck   ', compact('transaksi'));
    }
}
