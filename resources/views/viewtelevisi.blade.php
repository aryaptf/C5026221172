@extends('master2')
@section('judulhalaman', 'View Televisi')

@section('konten')
<h2><a href="https://www.malasngoding.com">www.malasngoding.com</a></h2>
<h3>View Televisi</h3>

<a href="/televisi" class="btn btn-success">Kembali</a>

    <br/>
    <br/>

    <div class="row">
        <div class="col-6 border">
        </div>
        <div class="col-6">
            @foreach ($televisi as $t)
            <fieldset disabled>
                <form action="/televisi/update" method="post" class="form-horizontal " role="form">
                    {{ csrf_field() }}
                    <input type="hidden" name="id" value="{{ $t->kodetelevisi }}">
                    <div class = "form-group row">
                        <label for = "kodetelevisi" class = "col-sm-3 control-label">Kode Televisi</label>
                        <div class = "col-sm-9">
                            <input type="number" required="required" name="kodetelevisi" value="{{ $t->kodetelevisi }}" class="form-control">
                        </div>
                    </div>
                    <div class = "form-group row">
                        <label for = "merktelevisi" class = "col-sm-3 control-label">Merk Televisi</label>
                        <div class = "col-sm-9">
                            <input type="text" required="required" name="merktelevisi" value="{{ $t->merktelevisi }}" class="form-control">
                        </div>
                    </div>
                    <div class = "form-group row">
                        <label for = "stocktelevisi" class = "col-sm-3 control-label">Stock Televisi</label>
                        <div class = "col-sm-9">
                            <input type="number" required="required" name="stocktelevisi" value="{{ $t->stocktelevisi }}" class="form-control">
                        </div>
                    </div>
                    <div class = "form-group row">
                        <label for = "tersedia" class = "col-sm-3 control-label">Tersedia</label>
                        <div class = "col-sm-9">
                            <input type="text" required="required" name="tersedia" value="{{ $t->tersedia }}" class="form-control">
                        </div>
                    </div>
                </form>
            </fieldset>
            <div class="text-center">
                <a href="/televisi" class="btn btn-primary w-25">OK</a>
            </div>
            @endforeach
        </div>
    </div>

@endsection
