@extends('layouts.base')
@section('title', 'Result')
@section('content')
    <h4>Hasil Pengiriman Data (POST)</h4>
    <table>
        <tr>
            <td class="pe-3 py-1">NIM</td>
            <td class="py-1">{{ $nim }}</td>
        </tr>
        <tr>
            <td class="pe-3 py-1">Nama</td>
            <td class="py-1">{{ $nama }}</td>
        </tr>
    </table>
@endsection
