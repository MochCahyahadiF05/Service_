<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Montir;
use Validator;
use RealRashid\SweetAlert\Facades\Alert;
class MontirController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $montir=Montir::all();
        return view('backEnd.montir.index',compact('montir'));
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
        $rules = [
            'nama_montir'=>'required',
            'alamat_montir'=>'required',
            'tlp_montir'=>'required|min:11'
        ];
        $messages = [
            'nama_montir.required'=>'Nama Tidak Boleh Kosong!',
            'alamat_montir.required'=>'Alamat Tidak Boleh Kosong!',
            'tlp_montir.required'=>'Telepon Tidak Boleh Kosong!',
            'tlp_montir.min:11'=>'Minimal 11 Angka No Telp!',
            'tlp_montir.numeric'=>'Hanya Boleh Angka!'
        ];

        $validated = Validator::make($request->all(), $rules, $messages);

        if ($validated->fails()) {
            Alert::error('data yang anda input ada kesalahan', 'Oops!')->persistent("Ok");
            return back()->withErrors($validated)->withInput();
        }

        $montir = new Montir();
        $montir->nama_montir = $request->nama_montir;
        $montir->alamat_montir = $request->alamat_montir;
        $montir->tlp_montir = $request->tlp_montir;
        $montir->save();
        Alert::success('Done', 'Data berhasil dibuat');
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
        $rules = [
            'nama_montir'=>'required',
            'alamat_montir'=>'required',
            'tlp_montir'=>'required|min:11'
        ];
        $messages = [
            'nama_montir.required'=>'Nama Tidak Boleh Kosong!',
            'alamat_montir.required'=>'Alamat Tidak Boleh Kosong!',
            'tlp_montir.required'=>'Telepon Tidak Boleh Kosong!',
            'tlp_montir.min:11'=>'Minimal 11 Angka No Telp!',
            'tlp_montir.numeric'=>'Hanya Boleh Angka!'
        ];

        $validated = Validator::make($request->all(), $rules, $messages);

        if ($validated->fails()) {
            Alert::error('data yang anda input ada kesalahan', 'Oops!')->persistent("Ok");
            return back()->withErrors($validated)->withInput();
        }

        $montir = Montir::findOrFail($id);
        $montir->nama_montir = $request->nama_montir;
        $montir->alamat_montir = $request->alamat_montir;
        $montir->tlp_montir = $request->tlp_montir;
        $montir->save();
        Alert::success('Done', 'Data berhasil dibuat');
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $montir = Montir::findOrFail($id);
        $montir->delete();
        Alert::success('Done', 'Data berhasil dihapus');
        return redirect()->route('montir.index');
    }
}
