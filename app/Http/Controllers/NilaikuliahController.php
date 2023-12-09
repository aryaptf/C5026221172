<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class NilaikuliahController extends Controller
{
	public function indexnilai()
	{
    	// mengambil data dari table nilaikuliah
		//$pegawai = DB::table('pegawai')->get();
        $nilaikuliah = DB::table('nilaikuliah')->get();
    	// mengirim data pegawai ke view index
		return view('indexnilai',['nilaikuliah' => $nilaikuliah]);

	}

	// method untuk menampilkan view form tambah pegawai
	public function tambahnilai()
	{

		// memanggil view tambah
		return view('tambahnilai');

	}

	// method untuk insert data ke table pegawai
	public function store(Request $request)
	{
		// insert data ke table pegawai
		DB::table('nilaikuliah')->insert([
			'ID' => $request->id,
			'NRP' => $request->nrp,
			'NilaiAngka' => $request->nilaiangka,
			'SKS' => $request->sks
		]);
		// alihkan halaman ke halaman pegawai
		return redirect('/nilaikuliah');

	}
}
