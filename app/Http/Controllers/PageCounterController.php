<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class PageCounterController extends Controller
{
    public function index()
    {
        // Update dengan increment pada Jumlah
        DB::table('pagecounter')->where('id', 1)->increment('Jumlah');

        // Ambil data terbaru
        $pagecounter = DB::table('pagecounter')->where('id', 1)->first();

        // Kirim ke view
        return view('pagecounter', ['pagecounter' => $pagecounter]);
    }
}
