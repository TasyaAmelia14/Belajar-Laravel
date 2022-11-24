@extends('layout')

@section('title', 'Contact Page')

@section('content')
    <h2>Contact Ya Gaes Ya</h2>
    <div>
        <table  cellpadding=10 cellspacing=0 border=1>
        <tr>
            <th>No</th>
            <th>NIS</th>
            <th>Nama Lengkap</th>
            <th>Jenis Kelamin</th>
            <th>Waktu entri</th>
        </tr>
        @foreach($data as $person)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $person->nis }}</td>
            <td>{{ $person->namalengkap }}</td>
            <td>{{ $person->jk }}</td>
            <td>{{ $person->created_at }}</td>
        </tr>
        @endforeach
    </table>
    </div>
@endsection