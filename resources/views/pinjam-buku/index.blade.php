@extends('layouts.app')
@section('content')

    <h2>PEMINJAMAN BUKU</h2>
    <a href="{{route('pinjam-buku.create')}}">Buku baru</a>
    <ul>
        <table border="2">
            <thead>
            <tr>
                <th>#</th>
                <th>Nama Peminjam</th>
                <th>Nama Buku</th>
                <th>Jumlah Buku</th>
                <th>Tanggal Pinjam</th>
                <th>Tanggal Kembali</th>
                <th>Denda</th>
                <th>Aksi</th>
            </tr>
            </thead>
            @foreach ($pinjamBukus as $pinjamBuku)
                <tr>
                    <td>{{ $pinjamBuku->id }}</td>
                    <td>{{ $pinjamBuku->nama_peminjam }}</td>
                    <td>{{ $pinjamBuku->nama_buku }}</td>
                    <td>{{ $pinjamBuku->jumlah_buku }}</td>
                    <td>{{ $pinjamBuku->tanggal_pinjam }}</td>
                    <td>{{ $pinjamBuku->tanggal_kembali }}</td>
                    <td>{{ $pinjamBuku->denda }}</td>
                    <td><a href="{{route ('pinjam-buku.edit', $pinjamBuku->id)}}">EDIT</a>
                    <form action="{{route ('pinjam-buku.destroy', $pinjamBuku->id)}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Delete</button>
                    </form>
                    </td>
                </tr>  
            </tbody>
            @endforeach
        </table>
     
    </ul>
@endsection