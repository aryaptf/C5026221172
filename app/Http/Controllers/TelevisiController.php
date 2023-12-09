<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class TelevisiController extends Controller
{
	public function indextelevisi()
	{
    	// mengambil data dari table pegawai
		//$pegawai = DB::table('pegawai')->get();
        $televisi = DB::table('televisi')->paginate(15);
    	// mengirim data pegawai ke view index
		return view('indextelevisi',['televisi' => $televisi]);

	}

	// method untuk menampilkan view form tambah pegawai
	public function tambahtelevisi()
	{

		// memanggil view tambah
		return view('tambahtelevisi');

	}

	// method untuk insert data ke table pegawai
	public function store(Request $request)
	{
        if($request->stocktelevisi > 0) {
            $tersedia='Y';
        }else {
            $tersedia='N';
        }
		// insert data ke table pegawai
		DB::table('televisi')->insert([
			'kodetelevisi' => $request->kodetelevisi,
			'merktelevisi' => $request->merktelevisi,
			'stocktelevisi' => $request->stocktelevisi,
			'tersedia' => $tersedia
		]);
		// alihkan halaman ke halaman pegawai
		return redirect('/televisi');

	}

	// method untuk edit data pegawai
	public function edittelevisi($id)
	{
		// mengambil data pegawai berdasarkan id yang dipilih
		$televisi = DB::table('televisi')->where('kodetelevisi',$id)->get();
		// passing data pegawai yang didapat ke view edit.blade.php
		return view('edittelevisi',['televisi' => $televisi]);

	}

	// update data pegawai
	public function update(Request $request)
	{
        if($request->stocktelevisi > 0) {
            $tersedia='Y';
        }else {
            $tersedia='N';
        }
		// update data pegawai
		DB::table('televisi')->where('kodetelevisi',$request->id)->update([
			'kodetelevisi' => $request->kodetelevisi,
			'merktelevisi' => $request->merktelevisi,
			'stocktelevisi' => $request->stocktelevisi,
			'tersedia' => $tersedia
		]);
		// alihkan halaman ke halaman pegawai
		return redirect('/televisi');
	}

	// method untuk hapus data pegawai
	public function hapustelevisi($id)
	{
		// menghapus data pegawai berdasarkan id yang dipilih
		DB::table('televisi')->where('kodetelevisi',$id)->delete();

		// alihkan halaman ke halaman pegawai
		return redirect('/televisi');
	}

    public function cari(Request $request)
	{
		// menangkap data pencarian
		$cari = $request->cari;

    		// mengambil data dari table pegawai sesuai pencarian data
		$televisi = DB::table('televisi')
		->where('merktelevisi','like',"%".$cari."%")
		->paginate();

    		// mengirim data pegawai ke view index
		return view('indextelevisi',['televisi' => $televisi , 'cari' => $cari]);

	}

    public function viewtelevisi($id)
	{
		// mengambil data pegawai berdasarkan id yang dipilih
		$televisi = DB::table('televisi')->where('kodetelevisi',$id)->get();
		// passing data pegawai yang didapat ke view view.blade.php
		return view('viewtelevisi',['televisi' => $televisi]);
	}
}
