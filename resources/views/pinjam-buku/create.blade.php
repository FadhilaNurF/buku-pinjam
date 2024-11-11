@extends('layouts.app')

@section('content')

    <h1>Peminjam</h1>

    <form action="{{ route('pinjam-buku.store') }}" method="POST">
        @csrf
        <div>
            <label for="nama_peminjam">Nama peminjam</label>
            <input type="text" name="nama_peminjam" id="nama_peminjam" required>
        </div>

        <div>
            <label for="nama_buku">Nama buku</label>
            <input type="text" name="nama_buku" id="nama_buku " required>
        </div>

        <div>
            <label for="jumlah_buku">Jumlah buku</label>
            <input type="number" name="jumlah_buku" id="jumlah_buku" required>
        </div>

        <div>
            <label for="tanggal-pinjam">Tanggal pinjam</label>
            <input type="date" name="tanggal_pinjam" id="tanggal_pinjam" required>
        </div>

        <div>
            <button type="submit">simpan</button>
        </div>
    </form>


@endsection