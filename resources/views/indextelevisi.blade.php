@extends('master2')
@section('judulhalaman','Televisi')

@section('konten')
	<h2>www.malasngoding.com</h2>
	<h3>Televisi</h3>

	<a href="/televisi/tambahtelevisi" class="btn btn-primary">Tambah Televisi</a>

	<br/>
    <p>Cari Televisi :</p>
	<form action="/televisi/cari" method="GET">
		<input class="form-control" type="text" name="cari" placeholder="Cari Televisi..."
        value="{{ old("cari", isset($cari) ? $cari : '') }}">
		<input type="submit" value="CARI" class="btn btn-info">
	</form>
	<br/>

	<table class="table table-striped table-hover">
		<tr class="text-center">
			<th>Kode Televisi</th>
			<th>Merk Televisi</th>
			<th>Stock Televisi</th>
			<th>Tersedia</th>
            <th>Opsi</th>
		</tr>
		@foreach($televisi as $t)
		<tr class="text-center">
			<td>{{ $t->kodetelevisi }}</td>
			<td>{{ $t->merktelevisi }}</td>
			<td>{{ $t->stocktelevisi }}</td>
			<td>{{ $t->tersedia }}</td>
            <td class="col-md-3">
                <a href="/televisi/viewtelevisi/{{ $t->kodetelevisi }}" class="btn btn-success">View</a>
				|
				<a href="/televisi/edittelevisi/{{ $t->kodetelevisi }}" class="btn btn-warning">Edit</a>
                |
				<a href="/televisi/hapustelevisi/{{ $t->kodetelevisi }}" class="btn btn-danger">Hapus</a>
            </td>
		</tr>
		@endforeach
	</table>

    {{ $televisi->links() }}
@endsection
