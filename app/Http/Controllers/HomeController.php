<?php

namespace App\Http\Controllers;

use App\Models\DataBuku;
use App\Models\Pinjaman;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $buku = DataBuku::all();
        return view('landingPage', compact('buku'));
    }

    public function detail($id)
    {
        $buku = DataBuku::where('judul','=',$id)->first();

        return view('lihatDetail', compact('buku'));
    }

    public function katalog()
    {
        $buku = DataBuku::all();
        return view('katalogBuku', compact('buku'));
    }

    public function pinjam(Request $request, $id)
    {
        $pinjam  = new Pinjaman();

        $no_rand = rand(00000, 99999);

        $pinjam->peminjaman_id = "IDPJMN-". $no_rand;
        $pinjam->tanggal_pinjam = $request->tanggal_pinjam;
        $pinjam->tanggal_kembali = $request->tanggal_kembali;
        $pinjam->user_id = auth()->user()->id;
        $pinjam->buku_id = $id;
        $pinjam->status = 'Pending';

        $pinjam->save();

        return redirect('/peminjamanBuku');
    }

    public function riwayat()
    {   
        $id = auth()->user()->id;
        $pinjam = Pinjaman::where("user_id", "=", $id)->get();

        return view('peminjamanBuku', compact('pinjam'));
    }
}
