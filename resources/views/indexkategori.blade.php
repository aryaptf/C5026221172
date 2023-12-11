@extends('master2')
@section('judulhalaman', 'Data Kategori')

@section('konten')
    <div class="row">

        <div class="col-8">
            <form action="/kategori/hasil" method="post" class="form-vertical">
                {{ csrf_field() }}
                <label for="kategori">Pilih Kategori</label>
                <div class="form-group row">

                    <div class="col-sm-10">
                        <select class="form-control" id="kategori" name="kategori">
                            @foreach($kategori as $k)
                                <option value="{{ $k->ID }}">{{ $k->Nama }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <input type="submit" value="KIRIM" class="btn btn-primary">
            </form>
        </div>
    </div>
@endsection
