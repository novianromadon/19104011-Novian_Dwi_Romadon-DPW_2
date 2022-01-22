<!-- untuk menentukan file mana yang diwariskan kedalam file child -->
@extends('base')

<!-- untuk mendefinisikan isi dari "yield" -->
@section('content')
    <h1>Data Mahasiswa</h1>
    <table border="2" width="200">
        <tr align="center">
            <th>NO</th>
            <th>NAMA</th>
            <th>ASAL</th>
        </tr>
        <tr>
            <td>1</td>
            <td>Budi</td>
            <td>Purwokerto</td>
        </tr>
        <tr>
            <td>2</td>
            <td>Sigit</td>
            <td>Cilacap</td>
        </tr>
        <tr>
            <td>3</td>
            <td>Tiara</td>
            <td>Bandung</td>
        </tr>
    </table>
@endsection
