@extends('master2')
@section('judulhalaman', 'Edit Televisi')

@section('konten')
<h2><a href="https://www.malasngoding.com">www.malasngoding.com</a></h2>
<h3>Edit Televisi</h3>

<a href="/televisi" class="btn btn-success">Kembali</a>

    <br/>
    <br/>

	@foreach($televisi as $t)
	<form action="/televisi/update" method="post" class="form-horizontal">
		{{ csrf_field() }}
        <div class="form-group row">
            <input type="hidden" name="kodetelevisi" value="{{ $t->kodetelevisi }}">
        </div>
        <div class="form-group row">
            <label for="merktelevisi" class="col-xl-2 col-form-label mr-2">Merk Televisi</label>
            <div class="col-sm-9">
                <input type="text" required="required" class="form-control" id="merktelevisi" name="merktelevisi" value="{{ $t->merktelevisi }}">
            </div>
        </div>
        <div class="form-group row">
            <label for="stocktelevisi" class="col-xl-2 col-form-label mr-2">Stock Televisi</label>
            <div class="col-sm-9">
                <input type="number" required="required" class="form-control" id="stocktelevisi" name="stocktelevisi" value="{{ $t->stocktelevisi }}">
            </div>
        </div>
        <input type="submit" value="Simpan Data" class="btn btn-primary">
	</form>
	@endforeach
@endsection
