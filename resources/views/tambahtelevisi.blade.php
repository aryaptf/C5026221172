@extends('master2')
@section('judulhalaman','Tambah Televisi')

@section('konten')
	<h2><a href="https://www.malasngoding.com">www.malasngoding.com</a></h2>
	<h3>Tambah Televisi</h3>

	<a href="/televisi" class="btn btn-success">Kembali</a>

	<br/>
	<br/>

	<form action="/televisi/store" method="post" class="form-horizontal">
		{{ csrf_field() }}
        <div class="form-group row">
            <label for="merktelevisi" class="col-xl-2 col-form-label mr-2">Merk Televisi</label>
            <div class="col-sm-9">
                <input type="text" class="form-control" id="merktelevisi" name="merktelevisi">
            </div>
        </div>
        <div class="form-group row">
            <label for="stocktelevisi" class="col-xl-2 col-form-label mr-2">Stock Televisi</label>
            <div class="col-sm-9">
                <input type="number" class="form-control" id="stocktelevisi" name="stocktelevisi">
            </div>
        </div>
		<input type="submit" value="Simpan Data" class="btn btn-primary">
	</form>
@endsection



