<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Validator;

class ServiceController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $service = Service::all();
        return view('backEnd.service.index',compact('service'));
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
            'nama_service'=>'required',
            'harga_service'=>'required',
            // 'deskripsi'=>'nullable'
        ];
        $messages = [
            'nama_service.required'=>'Nama Tidak Boleh Kosong!',
            'harga_service.required'=>'Harga Tidak Boleh Kosong!'
        ];

        $validated = Validator::make($request->all(), $rules, $messages);

        if ($validated->fails()) {
            Alert::error('data yang anda input ada kesalahan', 'Oops!')->persistent("Ok");
            return back()->withErrors($validated)->withInput();
        }

        $service = new Service();
        $service->nama_service = $request->nama_service;
        $service->harga_service = $request->harga_service;
        $service->deskripsi = $request->deskripsi;
        $service->status = $request->status;
        $service->save();
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
            'nama_service'=>'required',
            'harga_service'=>'required'
        ];
        $messages = [
            'nama_service.required'=>'Nama Tidak Boleh Kosong!',
            'harga_service.required'=>'Harga Tidak Boleh Kosong!'
        ];

        $validated = Validator::make($request->all(), $rules, $messages);

        if ($validated->fails()) {
            Alert::error('data yang anda input ada kesalahan', 'Oops!')->persistent("Ok");
            return back()->withErrors($validated)->withInput();
        }

        $service = Service::findOrFail($id);
        $service->nama_service = $request->nama_service;
        $service->harga_service = $request->harga_service;
        $service->deskripsi = $request->deskripsi;
        $service->status = $request->status;
        $service->save();
        Alert::success('Done', 'Data berhasil diedit');
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
        $service = Service::findOrFail($id);
        $service->delete();
        Alert::success('Done', 'Data berhasil dihapus');
        return redirect()->route('service.index');
    }
}
