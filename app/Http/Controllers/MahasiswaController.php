<?php

namespace App\Http\Controllers;

use App\Models\mahasiswa;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $datamhs = mahasiswa::all();
        // return $datamhs;
        return view('tampilan', compact('datamhs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('form');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $mahasiswa = new mahasiswa;
        $mahasiswa->nama=$request->nama;
        $mahasiswa->tgl_lahir=$request->tgl_lahir;
        $mahasiswa->alamat=$request->alamat;
        $mahasiswa->agama=$request->agama;
        $mahasiswa->universitas=$request->universitas;
        $mahasiswa->fakultas=$request->fakultas;
        $mahasiswa->prodi=$request->prodi;
        $mahasiswa->nim=$request->nim;
        $mahasiswa->save();
        return redirect('mahasiswa');
    }

    /**
     * Display the specified resource.
     */
    public function show(mahasiswa $mahasiswa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(mahasiswa $mahasiswa)
    {
        return view('edit', compact('mahasiswa'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, mahasiswa $mahasiswa)
    {
        $mahasiswa->nama=$request->nama;
        $mahasiswa->tgl_lahir=$request->tgl_lahir;
        $mahasiswa->alamat=$request->alamat;
        $mahasiswa->agama=$request->agama;
        $mahasiswa->universitas=$request->universitas;
        $mahasiswa->fakultas=$request->fakultas;
        $mahasiswa->prodi=$request->prodi;
        $mahasiswa->nim=$request->nim;
        $mahasiswa->save();
        return redirect('mahasiswa');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(mahasiswa $mahasiswa)
    {
        $mahasiswa->delete();
        return redirect ('mahasiswa');

    }
}
