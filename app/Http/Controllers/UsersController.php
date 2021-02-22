<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\divisi;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        return view('users.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $divisi = divisi::all();
        return view('users.create', compact('divisi'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $request->validate([
            'nama'=>'required',
            'alamat'=>'required',
            'tahun_masuk'=>'required',
            'divisi_id'=>'required'
        ]);

        User::create($request->all());

        return redirect('/users')->with('status','Berhasil Menambahkan Data User');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        return view('users.show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        $divisi = divisi::all();
        return view('users.edit', compact('user','divisi'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $request->validate([
            'nama'=>'required',
            'alamat'=>'required',
            'tahun_masuk'=>'required',
            'divisi_id'=>'required'
        ]);

        User::where('id', $user->id)
                ->update([
                    'nama' =>$request->nama,
                    'alamat'=>$request->alamat,
                    'tahun_masuk'=>$request->tahun_masuk,
                    'divisi_id'=>$request->divisi_id
                ]);

                return redirect('/users')->with('status','Berhasil Mengubah Data User');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        User::destroy($user->id);
        return redirect('/users')->with('status','Berhasil Di Hapus');
    }
}
