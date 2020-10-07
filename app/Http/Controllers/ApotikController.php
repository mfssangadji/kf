<?php

namespace App\Http\Controllers;

use App\Apotik;
use Illuminate\Http\Request;

class ApotikController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $apotik = Apotik::all();
        return view('apotik.index', compact('apotik'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('apotik.create');
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
            'code' => 'required',
            'nama_apotik' => 'required',
            'no_telp' => 'required',
            'alamat' => 'required',
        ]);

        Apotik::create([
            'code' => $request->code,
            'nama_apotik' => $request->nama_apotik,
            'no_telp' => $request->no_telp,
            'alamat' => $request->alamat,
        ]);

        return redirect()->route('apotik');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Apotik  $apotik
     * @return \Illuminate\Http\Response
     */
    public function show(Apotik $apotik)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Apotik  $apotik
     * @return \Illuminate\Http\Response
     */
    public function edit(Apotik $apotik)
    {
        $apotik = Apotik::find($apotik->id);
        return view('apotik.edit', compact('apotik'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Apotik  $apotik
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Apotik $apotik)
    {
        $this->validate($request, [
            'code' => 'required',
            'nama_apotik' => 'required',
            'no_telp' => 'required',
            'alamat' => 'required',
        ]);

        Apotik::where('id', $apotik->id)
        ->update([
            'code' => $request->code,
            'nama_apotik' => $request->nama_apotik,
            'no_telp' => $request->no_telp,
            'alamat' => $request->alamat,
        ]);

        return redirect()->route('apotik');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Apotik  $apotik
     * @return \Illuminate\Http\Response
     */
    public function destroy(Apotik $apotik)
    {
        Apotik::destroy($apotik->id);
        return redirect()->route('apotik');
    }
}
