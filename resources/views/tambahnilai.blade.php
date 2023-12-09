@extends('master2')
@section('judulhalaman','Tambah Nilai Mahasiswa')

@section('konten')
	<h2><a href="https://www.malasngoding.com">www.malasngoding.com</a></h2>
	<h3>Tambah Nilai Mahasiswa</h3>

	<a href="/nilaikuliah" class="btn btn-success">Kembali</a>

	<br/>
	<br/>

	<form action="/nilaikuliah/store" method="post" class="form-horizontal">
		{{ csrf_field() }}
        <div class="form-group row">
            <label for="NRP" class="col-xl-2 col-form-label mr-2">NRP</label>
            <div class="col-sm-9">
                <input type="number" class="form-control" id="nrp" name="nrp">
            </div>
        </div>
        <div class="form-group row">
            <label for="nilaiangka" class="col-xl-2 col-form-label mr-2">Nilai Angka</label>
            <div class="col-sm-9">
                <input type="number" class="form-control" id="nilaiangka" name="nilaiangka">
            </div>
        </div>
        <div class="form-group row">
            <label for="sks" class="col-xl-2 col-form-label mr-2">SKS</label>
            <div class="col-sm-9">
                <input type="number" class="form-control" id="sks" name="sks">
            </div>
        </div>
		<input type="submit" value="Simpan Data" class="btn btn-primary">
	</form>
@endsection



