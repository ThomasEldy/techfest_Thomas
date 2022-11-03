@extends('layouts.main')
@section('isikonten')
<h1>Edit Data Siswa</h1>
<form action="{{ route('siswa.update', $siswa->id) }}" method="POST"
enctype="multipart/form-data">
@csrf
@method('PUT')
<div clss=mb-3>
<label for="examplecontroltextarea1" class="form-label>">nama</label>
<textarea class="form-control" id="nama" name="nama" rows="3">{{ $siswa->nama }}</textarea>
</div>
<div clss=mb-3>
<label for="examplecontroltextarea1" class="form-label>">nis</label>
<textarea class="form-control" id="nis" name="nis" rows="3">{{ $siswa->nis }}</textarea>
</div>
<div clss=mb-3>
<label for="examplecontroltextarea1" class="form-label>">kelas</label>
<textarea class="form-control" id="kelas" name="kelas" rows="3">{{ $siswa->kelas }}</textarea>
</div>
<div clss=mb-3>
<label for="examplecontroltextarea1" class="form-label>">tempat_lahir</label>
<textarea class="form-control" id="tempat_lahir" name="tempat_lahir" rows="3">{{ $siswa->tempat_lahir }}</textarea>
</div>
<div clss=mb-3>
<label for="examplecontroltextarea1" class="form-label>">tanggal_lahir</label>
<textarea class="form-control" id="tanggal_lahir" name="tanggal_lahir" rows="3">{{ $siswa->tanggal_lahir }}</textarea>
</div>
<div class="mb-3">
    <label for="formfile" class="form-label" enctype='multipart/form-data'>foto</label>
    <input class="form-control" name="foto" type="file" id="formfile">
</div>
<div clss=mb-3>
<label for="examplecontroltextarea1" class="form-label>">alamat</label>
<textarea class="form-control" id="alamat" name="alamat" rows="3">{{ $siswa->alamat }}</textarea>
</div>
<div clss=mb-3>
<label for="examplecontroltextarea1" class="form-label>">no_telpon</label>
<textarea class="form-control" id="no_telpon" name="no_telpon" rows="3">{{ $siswa->no_telpon }}</textarea>
</div>
<button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection











