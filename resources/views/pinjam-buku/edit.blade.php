<!-- resources/views/pinjam_buku/edit.blade.php -->

@extends('layouts.app')

@section('content')
    <h1>Edit Peminjaman Buku</h1>
    
    <form action="{{ route('pinjam-buku.update', $pinjamBuku->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="nama_peminjam" class="form-label">Nama Peminjam</label>
            <input type="text" id="nama_peminjam" name="nama_peminjam" value="{{ $pinjamBuku->nama_peminjam }}" required>
        </div>

        <div class="mb-3">
            <label for="nama_buku" class="form-label">Nama Buku</label>
            <input type="text" id="nama_buku" name="nama_buku" value="{{ $pinjamBuku->nama_buku }}" required>
        </div>

        <div class="mb-3">
            <label for="jumlah_buku" class="form-label">Jumlah Buku</label>
            <input type="number" id="jumlah_buku" name="jumlah_buku" value="{{ $pinjamBuku->jumlah_buku }}" required>
        </div>

        <div class="mb-3">
            <label for="tanggal_pinjam" class="form-label">Tanggal Pinjam</label>
            <input type="date" id="tanggal_pinjam" name="tanggal_pinjam" value="{{ $pinjamBuku->tanggal_pinjam }}">
        </div>

        <div class="mb-3">
            <label for="tanggal_kembali" class="form-label">Tanggal Kembali</label>
            <input type="date" id="tanggal_kembali" name="tanggal_kembali" value="{{ $pinjamBuku->tanggal_kembali }}">
        </div>

        <div class="mb-3">
            <label for="denda" class="form-label">Denda</label>
            <input type="number" id="denda" name="denda" value="{{ $pinjamBuku->denda }}">
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
    </form>
@endsection
