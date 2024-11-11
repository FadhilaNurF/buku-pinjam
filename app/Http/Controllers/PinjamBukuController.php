<?php

namespace App\Http\Controllers;

use App\Models\pinjamBuku;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PinjamBukuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pinjamBukus = PinjamBuku::all();
        return view('pinjam-buku.index', compact('pinjamBukus'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pinjam-buku.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_peminjam' => 'required|string|max:100',
            'nama_buku' => 'required|string|max:100',
            'jumlah_buku' => 'required|integer',
            'tanggal_pinjam' => 'nullable|date',
        ]);

        PinjamBuku::create($request->all());

        return redirect()->route('pinjam-buku.index');

    }

    /**
     * Display the specified resource.
     */
    public function show(pinjamBuku $pinjamBuku)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(pinjamBuku $pinjamBuku)
    {
        return view('pinjam-buku.edit', compact('pinjamBuku'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, pinjamBuku $pinjamBuku)
    {
        $request->validate([
            'nama_peminjam' => 'required|string|max:255',
            'nama_buku' => 'required|string|max:255',
            'jumlah_buku' => 'required|integer',
            'tanggal_pinjam' => 'nullable|date',
            'tanggal_kembali' => 'nullable|date',
            'denda' => 'nullable|integer',
        ]);

        $pinjamBuku->update($request->all());
        return redirect()->route('pinjam-buku.index');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(pinjamBuku $pinjamBuku)
    {
       $pinjamBuku->delete();
       return redirect()->route('pinjam-buku.index');
    }
}
