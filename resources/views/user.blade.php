@extends('layouts.base')
@section('title', 'Form User')
@section('content')
    <h4>Form Input Mahasiswa (POST)</h4>
    <form action="/result" method="POST">
        @csrf
        <table>
            <tr>
                <td class="pe-3 py-1">NIM</td>
                <td class="py-1"><input type="number" name="nim" class="form-control" required></td>
            </tr>
            <tr>
                <td class="pe-3 py-1">Nama</td>
                <td class="py-1"><input type="text" name="nama" class="form-control" required></td>
            </tr>
            <tr>
                <td colspan="2" class="py-2"><input type="submit" value="Kirim" class="btn btn-primary"></td>
            </tr>
        </table>
    </form>
@endsection
