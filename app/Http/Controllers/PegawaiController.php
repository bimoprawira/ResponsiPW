<?php

namespace App\Http\Controllers;

use App\Models\Pegawai;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PegawaiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pegawai = DB::table('pegawais')->get();
        return view('pegawai.table', ['pegawai' => $pegawai]);
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pegawai.create');
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|max:100',
            'alamat' => 'required|max:100',
            'email' => 'required|max:100',
        ]);
        DB::table('pegawais')->insert([
            'nama' => $request->nama,
            'alamat' => $request->alamat,
            'email' => $request->email,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        return redirect('/pegawai');
    }
    /**
     * Display the specified resource.
     */
    public function show(Pegawai $pegawai)
    {
        //
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pegawai $pegawai)
    {
        return view('pegawai.edit', ['pegawai' => $pegawai]);
    }
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Pegawai $pegawai)
    {
        $request->validate([
            'nama' => 'required|max:100',
            'alamat' => 'required|max:100',
            'email' => 'required|max:100',
        ]);
        $pegawai->update($request->only(['nama', 'alamat', 'email']));
        return redirect('/pegawai');
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        DB::table('pegawais')->where('id', $id)->delete();
        return redirect('/pegawai');
    }
}
