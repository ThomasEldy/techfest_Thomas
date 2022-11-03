@extends('layouts.main')
@section('isi_konten')
<h1 class="mt-2">Form Data Siswa</h1>
<form action="{{ route('berita.store') }}" method="POST"
enctype="multipart/form-data">
@csrf
<div class="form-check form-check-inline">
    <input class="form-check-input" type="checkbox" id="inlinecheckbox1" name="release">
    <label class="form-check-label" for="inlinecheckbox1">released</label>
    </div>    
<div class="mb-3">
<label for="exampleformcontrolinput1" class="form-label>">nama</label>
<input type="text" class="form-control" id="nama">
</div>
<div class="mb-3">
<label for="exampleformcontrolinput1" class="form-label>">nis</label>
<input type="text" class="form-control" id="nis">
</div>
<div class="mb-3">
<label for="exampleformcontrolinput1" class="form-label>">kelas</label>
<input type="text" class="form-control" id="kelas">
</div>
<div class="mb-3">
<label for="exampleformcontrolinput1" class="form-label>">tempat_lahir</label>
<input type="text" class="form-control" id="tempat_lahir">
</div>
<div class="mb-3">
<label for="exampleformcontrolinput1" class="form-label>">tanggal_lahir</label>
<input type="text" class="form-control" id="tanggal_lahir">
</div>
<div class="mb-3">
    <label for="formfile" class="form-label" enctype='multipart/form-data'>foto</label>
    <input class="form-control" name="foto" type="file" id="formfile">
</div>
<div class="mb-3">
<label for="exampleformcontrolinput1" class="form-label>">alamat</label>
<input type="text" class="form-control" id="alamat">
</div>
<div class="mb-3">
<label for="exampleformcontrolinput1" class="form-label>">no_telpon</label>
<input type="text" class="form-control" id="no_telpon">
</div>
<div>
<button type="submit" class="btn btn-primary">Submit</button>
</div>
</form>
@endsection


