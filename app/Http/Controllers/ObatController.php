<?php

namespace App\Http\Controllers;

use App\Obat;
use Illuminate\Http\Request;

class ObatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $obat = Obat::all();
        return view('obat.index', compact('obat'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('obat.create');
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
            'nama_obat' => 'required',
            'jenis' => 'required',
            'harga' => 'required',
        ]);

        Obat::create([
            'code' => $request->code,
            'nama_obat' => $request->nama_obat,
            'jenis' => $request->jenis,
            'harga' => $request->harga,
        ]);

        return redirect()->route('obat');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Obat  $obat
     * @return \Illuminate\Http\Response
     */
    public function show(Obat $obat)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Obat  $obat
     * @return \Illuminate\Http\Response
     */
    public function edit(Obat $obat)
    {
        $obat = Obat::find($obat->id);
        return view('obat.edit', compact('obat'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Obat  $obat
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Obat $obat)
    {
        $this->validate($request, [
            'code' => 'required',
            'nama_obat' => 'required',
            'jenis' => 'required',
            'harga' => 'required',
        ]);

        Obat::where('id', $obat->id)
        ->update([
            'code' => $request->code,
            'nama_obat' => $request->nama_obat,
            'jenis' => $request->jenis,
            'harga' => $request->harga,
        ]);

        return redirect()->route('obat');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Obat  $obat
     * @return \Illuminate\Http\Response
     */
    public function destroy(Obat $obat)
    {
        Obat::destroy($obat->id);
        return redirect()->route('obat');
    }
}
