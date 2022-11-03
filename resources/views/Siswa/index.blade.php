@extends('layouts.main')
@section('isikonten')

<h1>List Data Siswa</h1>
<a href="{{ route('siswa.create') }}" class="btn btn-primary">Tambah Data</a>
<table class="table table-striped">
    <thead>
        <tr>
            <th scope="col">No</th>
            <th scope="col">Nama</th>
            <th scope="col">Nis</th>
            <th scope="col">Kelas</th>
            <th scope="col">Tempat Lahir</th>
            <th scope="col">Tanggal Lahir</th>
            <th scope="col">Foto</th>
            <th scope="col">Alamat</th>
            <th scope="col">No Telpon</th>
            <th scope="col">Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($siswa as $s)
        <tr>
            <th scope="row">{{ $loop->iteration }}</th>
            <td>{{ $s->nama }}</td>
            <td>{{ $s->nis }}</td>
            <td>{{ $s->kelas }}</td>
            <td>{{ $s->tempat_lahir }}</td>
            <td>{{ $s->tanggal_lahir }}</td>
            <td><img src="{{ asset('foto/'.$s->foto) }}" alt="" width="100px"></td>
            <td>{{ $s->alamat }}</td>
            <td>{{ $s->no_telpon }}</td>
            <td>
                <a href="{{ route('siswa.edit', $s->id) }}" class="btn btn-warning">Edit</a>
                <form action="{{ route('siswa.destroy', $s->id) }}" method="POST" class="d-inline">
                    @csrf
                    @method('delete')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
