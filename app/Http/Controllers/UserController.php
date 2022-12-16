<?php

namespace App\Http\Controllers;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use App\Models\User;
use Validator;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user=User::all();
        return view('backEnd.user.index',compact('user'));
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
    //     $user = User::findOrFail($id);
    //     return view('backEnd.user.edit1', compact('user'));
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
        $rules=[
            'name'=>'required',
            'email'=>'required',
            'old_password' => 'nullable|string',
            'password'=>'nullable|required_with:old_password|string|confirmed|min:8',
            'role'=>'required',
            'no_telepon'=>'required',
        ];
        $messages = [
            'name.required'=>'Name Harus Diisi!',
            'email.required'=>'Name Harus Diisi!',
            'password.min:8'=>'Password Minimal Harus 8!',
            'role.required'=>'Role jangan Kosong',
            'no_telepon.required'=>'No Telp Jangan Kosong!',
        ];
        $validated = Validator::make($request->all(), $rules, $messages);
        if ($validated->fails()) {
            Alert::error('data yang anda input ada kesalahan', 'Oops!')->persistent("Ok");
            return back()->withErrors($validated);
        }
        $user=User::findOrFail($id);
        $user->name = $request->name;
        $user->email = $request->email;
        // $user->password = $request->password;
        if ($request->filled('old_password')) {
            if (Hash::check($request->old_password, $user->password)) {
                $user->update([
                    'password' => Hash::make($request->password)
                ]);
            } else {
                return back()
                    ->withErrors(['old_password' => __('Please enter the correct password')])
                    ->withInput();
            }
        }
        $user->role = $request->role;
        // $user->profile = $request->profile;
        $user->alamat = $request->alamat;
        $user->no_telepon = $request->no_telepon;
        $user->no_polisi = $request->no_polisi;
        $user->save();
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
        //
    }
}
