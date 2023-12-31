<?php

namespace App\Http\Controllers;

use App\Models\fakultas;
use Illuminate\Http\Request;

class FakultasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $fakultas = Fakultas::all();
        return view("fakultas.index")->with("fakultas", $fakultas);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("fakultas.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validasi data input
        $validasi = $request->validate([
            "nama" => "required|unique:fakultas"
        ]);
        // Simpan data ke tabel fakultas
        Fakultas::create($validasi);
        return redirect("fakultas")->with("success", "Data fakultas berhasil disimpan");
    }

    /**
     * Display the specified resource.
     */
    public function show(fakultas $fakultas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $fakultas = Fakultas::find($id);
        return view('fakultas.edit')->with('fakultas', $fakultas);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $validasi = $request->validate([
            "nama" => "required"
        ]);
        Fakultas::find($id)->update($validasi);
        return redirect('fakultas')->with('success','Data Fakultas Berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $fakultas = Fakultas::find($id);
        $fakultas -> delete();
        return redirect('fakultas')->with('success','Data Berhasil dihapus');
    }
}
