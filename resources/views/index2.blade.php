@extends('master2')
@section('judulhalaman', 'Data Keranjang Belanja')

@section('konten')
    <h2>www.malasngoding.com</h2>
    <h3>Keranjang Belanja</h3>

    <a href="/keranjangbelanja/beli" class="btn btn-primary"> BELI </a>

    <br/>
    <br/>

    <table class="table table-striped table-hover">
        <tr class="text-center">
            <th>Kode Pembelian</th>
            <th>Kode Barang</th>
            <th>Jumlah Pembelian</th>
            <th>Harga Per Item</th>
            <th>Total</th>
            <th>Action</th>
        </tr>
        @foreach ($keranjangbelanja as $p)
            <tr class="text-center">
                <td>{{ $p->ID }}</td>
                <td>{{ $p->KodeBarang }}</td>
                <td>{{ $p->Jumlah }}</td>
                <td>{{ number_format($p->Harga, 2, ',', '.') }}</td>
                <td>{{ number_format($p->Harga * $p->Jumlah, 2, ',', '.') }}</td>
                <td class="col-sm-2">
                    <a href="/keranjangbelanja/hapus/{{ $p->ID }}" class="btn btn-danger">Batal</a>
                </td>
            </tr>
        @endforeach
    </table>

@endsection
