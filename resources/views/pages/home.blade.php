@extends('layout')

@section('title', 'home Page')

@section('content')
    <h2>Selamat Datang, {{ $name }} . 
    Kamu login sebagai {{ $role }}.</h2>
@endsection