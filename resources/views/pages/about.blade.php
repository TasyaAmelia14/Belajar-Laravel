@extends('layout')

@section('title', 'About Page')

@section('content')
    <h2>About Ya Gaes Ya</h2>
    <div>
        <p>Berikut fasilitas yang bisa anda gunakan. Login sebagai: </p>
        @if($role == "admin")
            Admin - Menambahkan, Mengedit, Menghapus Barang
        @elseif($role == "teller")
            Teller - Mengunduh Laporan KWU
        @else
            Kamu freak, role tidak diketahui.
        @endif
    </div>
@endsection