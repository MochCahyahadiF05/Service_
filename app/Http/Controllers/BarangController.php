<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Validator;

class BarangController extends Controller
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
        $barang = Barang::all();
        return view('backEnd.barang.index', compact('barang'));
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
        $rules =[
            'nama_barang'=>'required',
            'merk'=>'required',
            'foto'=>'image|mimes:jpg,png,svg,jpeg,|max:2048',
            // 'deskripsi'=>'required',
            'stok_barang'=>'required|numeric',
            'harga_barang'=>'required|numeric',

        ];
        $messages = [
            'nama_barang.required'=>'Nama Harus Diisi!',
            'merk.required'=>'Merk Harus Diisi!',
            'foto.mimes'=>'Gambar harus JPG,PNG, dan SVG! ',
            'foto.image'=>'Hanya Gambar! ',
            // 'deskripsi'=>'required',
            'stok_barang.required'=>'Jangan Kosong!',
            'harga_barang.required'=>'Jangan Kosong!',
        ];

        $validated = Validator::make($request->all(), $rules, $messages);

        if ($validated->fails()) {
            Alert::error('data yang anda input ada kesalahan', 'Oops!')->persistent("Ok");
            return back()->withErrors($validated)->withInput();
        }
        // $validated = $request->validate([
        //     'nama_barang' => 'required',
        //     'merk' => 'required',
        //     'foto' => 'image|max:2048',
        //     // 'deskripsi' => 'required',
        //     'stok_barang' => 'required|numeric',
        //     'harga_barang' => 'required|numeric',
        // ]);
        $barang = new Barang();
        $barang->nama_barang=$request->nama_barang;
        $barang->merk=$request->merk;
        if($request->hasFile('foto')){
            $image = $request->file('foto');
            $name = rand(1000,9999).$image->getClientOriginalName();
            $image->move('gambar/barangs/', $name);
            $barang->foto = $name;
            
        }
        $barang->deskripsi=$request->deskripsi;
        $barang->stok_barang=$request->stok_barang;
        $barang->harga_barang=$request->harga_barang;
        $barang->status = $request->status;
        $barang->save();
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
        $rules =[
            'nama_barang'=>'required',
            'merk'=>'required',
            'foto'=>'image|mimes:jpg,png,svg,jpeg,|max:2048',
            // 'deskripsi'=>'required',
            'stok_barang'=>'required|numeric',
            'harga_barang'=>'required|numeric',

        ];
        $messages = [
            'nama_barang.required'=>'Nama Harus Diisi!',
            'merk.required'=>'Merk Harus Diisi!',
            'foto.mimes'=>'Gambar harus JPG,PNG, dan SVG! ',
            'foto.image'=>'Hanya Gambar! ',
            // 'deskripsi'=>'required',
            'stok_barang.required'=>'Jangan Kosong!',
            'harga_barang.required'=>'Jangan Kosong!',
        ];

        $validated = Validator::make($request->all(), $rules, $messages);

        if ($validated->fails()) {
            Alert::error('data yang anda input ada kesalahan', 'Oops!')->persistent("Ok");
            return back()->withErrors($validated)->withInput();
        }

        // $validated = $request->validate([
        //     'nama_barang' => 'required',
        //     'merk' => 'required',
        //     'foto' => 'image|max:2048',
        //     // 'deskripsi' => 'required',
        //     'stok_barang' => 'required|numeric',
        //     'harga_barang' => 'required|numeric',
        // ]);
        $barang = Barang::findOrFail($id);
        $barang->nama_barang=$request->nama_barang;
        $barang->merk=$request->merk;
        if($request->hasFile('foto')){
            $barang->deleteimage();
            $image = $request->file('foto');
            $name = rand(1000,9999).$image->getClientOriginalName();
            $image->move('gambar/barangs/', $name);
            $barang->foto = $name;
            
        }
        $barang->deskripsi=$request->deskripsi;
        $barang->stok_barang=$request->stok_barang;
        $barang->harga_barang=$request->harga_barang;
        $barang->status = $request->status;
        $barang->save();
            // dd($request->all());
        Alert::success('Done', 'Data berhasil diubah');
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
        $barang = Barang::findOrFail($id);
        $barang->deleteImage();
        $barang->delete();
        // return response()->make()->alert()->question('Title','Lorem Lorem Lorem');
        // return response()->json(['status' => 'Mahasiswa Berhasil di hapus!']);
        return redirect()->route('barang.index');
    }
}
