<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RotiDBController extends Controller
{
    public function index()
    {
        $roti = DB::table('roti')->paginate(5);
        return view('roti.index', ['roti' => $roti]);
    }

    public function tambah()
    {
        return view('roti.tambah');
    }

    public function store(Request $request)
    {
        DB::table('roti')->insert([
            'merkroti'   => $request->merkroti,
            'hargaroti'  => $request->hargaroti,
            'tersedia'   => $request->tersedia,
            'berat'      => $request->berat
        ]);
        return redirect('/roti');
    }

    public function edit($ID)
    {
        $roti = DB::table('roti')->where('ID', $ID)->first();
        return view('roti.edit', ['roti' => $roti]);
    }

    public function update(Request $request)
    {
        DB::table('roti')->where('ID', $request->ID)->update([
            'merkroti'   => $request->merkroti,
            'hargaroti'  => $request->hargaroti,
            'tersedia'   => $request->tersedia,
            'berat'      => $request->berat
        ]);
        return redirect('/roti');
    }

    public function hapus($ID)
    {
        DB::table('roti')->where('ID', $ID)->delete();
        return redirect('/roti');
    }

    public function cari(Request $request)
	{
		// menangkap data pencarian
		$cari = $request->cari;

    		// mengambil data dari table pegawai sesuai pencarian data
		$roti = DB::table('roti')
		->where('merkroti','like',"%".$cari."%")
		->paginate(5);

    		// mengirim data pegawai ke view index
		return view('roti.index',['roti' => $roti]);
	}
}

