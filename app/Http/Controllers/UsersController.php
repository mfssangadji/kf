<?php

namespace App\Http\Controllers;

use App\User;
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
        $apotik = \App\Apotik::all();
        return view('users.create', compact('apotik'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'email' => "required",
            'password' => "required",
            'nama_lengkap' => "required",
            'no_telp' => "required",
            'status' => "required",
        ]);

        User::create([
            'apotik_id' => $request->apotik_id,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'nama_lengkap' => $request->nama_lengkap,
            'no_telp' => $request->no_telp,
            'status' => $request->status,
        ]);

        return redirect()->route('users');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        $apotik = \App\Apotik::all();
        $user = User::find($user->id);
        return view('users.edit', compact('user', 'apotik'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $this->validate($request, [
            'email' => "required",
            'nama_lengkap' => "required",
            'no_telp' => "required",
            'status' => "required",
        ]);

        if(empty($request->password)){
            User::where('id', $user->id)
            ->update([
                'apotik_id' => $request->apotik_id,
                'email' => $request->email,
                'nama_lengkap' => $request->nama_lengkap,
                'no_telp' => $request->no_telp,
                'status' => $request->status,
            ]);
        }else{
            User::where('id', $user->id)
            ->update([
                'apotik_id' => $request->apotik_id,
                'email' => $request->email,
                'password' => bcrypt($request->password),
                'nama_lengkap' => $request->nama_lengkap,
                'no_telp' => $request->no_telp,
                'status' => $request->status,
            ]);
        }

        return redirect()->route('users');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        User::destroy($user->id);
        return redirect()->route('users');
    }
}
