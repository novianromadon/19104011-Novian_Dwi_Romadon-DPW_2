<!-- untuk menentukan file mana yang diwariskan kedalam file child -->
@extends('base')

<!-- untuk mendefinisikan isi dari "yield" -->
@section('content')
    <div class="container">

        @if (session('pesan'))
            <div class="alert alert-success">
                {{ session('pesan') }}
            </div>
        @endif

        <h4>Data Mahasiswa Biasa</h4>

        <table>
            <tr>
                <td>
                    <a href="{{ url('/mahasiswa/create') }}" class="btn btn-success">Tambah</a>
                </td>
            </tr>
            <tr>
                <td></td>
            </tr>
            <tr>
                <td></td>
            </tr>
        </table>

        <table class="table">
            <thead>
                <tr>
                    <td>
                        #
                    </td>
                    <td>
                        NIM
                    </td>
                    <td>
                        Name
                    </td>
                    <td>
                        Gender
                    </td>
                    <td>
                        Jurusan
                    </td>
                    <td>
                        Alamat
                    </td>
                    <td>
                        Aksi
                    </td>
                </tr>
            </thead>

            @php
                $no = 1
            @endphp

            <tbody>
                @foreach($students as $s)
                    <tr>
                        <td>
                            {{ $no++ }}
                        </td>
                        <td>
                            {{ $s->nim }}
                        </td>
                        <td>
                            {{ $s->name }}
                        </td>
                        <td>
                            {{ $s->gender }}
                        </td>
                        <td>
                            {{ $s->departement }}
                        </td>
                        <td>
                            {{$s->address}}
                        </td>
                        <td>
                            <a href="{{ url('/mahasiswa/'.$s->id.'/edit') }}" class="btn btn-warning">Edit</a>
                            <form action="{{ url('/mahasiswa/hapus/'.$s->id) }}" method="post" class="d-inline">
                                @method('delete')
                                @csrf
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <hr>

        <h4>
            Data Mahasiswa Menggunakan Datatables
        </h4>

        <table>
            <tr>
                <td>
                    <a href="{{ url('/mahasiswa/create') }}" class="btn btn-success">Tambah</a>
                </td>
            </tr>
            <tr>
                <td></td>
            </tr>
            <tr>
                <td></td>
            </tr>
        </table>

        <table id="myTable" class="table">
            <thead>
                <tr>
                    <td>
                        #
                    </td>
                    <td>
                        NIM
                    </td>
                    <td>
                        Name
                    </td>
                    <td>
                        Gender
                    </td>
                    <td>
                        Jurusan
                    </td>
                    <td>
                        Alamat
                    </td>
                    <td>
                        Aksi
                    </td>
                </tr>
            </thead>

            @php
                $no = 1
            @endphp

            <tbody>
                @foreach($students as $s)
                    <tr>
                        <td>
                            {{ $no++ }}
                        </td>
                        <td>
                            {{ $s->nim }}
                        </td>
                        <td>
                            {{ $s->name }}
                        </td>
                        <td>
                            {{ $s->gender }}
                        </td>
                        <td>
                            {{ $s->departement }}
                        </td>
                        <td>
                            {{$s->address}}
                        </td>
                        <td>
                            <a href="{{ url('/mahasiswa/'.$s->id.'/edit') }}" class="btn btn-warning">Edit</a>
                            <form action="{{ url('/mahasiswa/hapus/'.$s->id) }}" method="post" class="d-inline">
                                @method('delete')
                                @csrf
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>


@endsection


