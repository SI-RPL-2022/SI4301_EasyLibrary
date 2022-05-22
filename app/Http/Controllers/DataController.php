<?php

namespace App\Http\Controllers;

use App\Models\DataBuku;
use App\Models\Pinjaman;
use Illuminate\Http\Request;

class DataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $data = DataBuku::all();
        $nomor = 1;
        $judul = 'Data Buku';
        return view('dataBuku', compact('judul','data','nomor'));
    }

    public function donasi()
    {   
        $data = DataBuku::all();
        $nomor = 1;
        $judul = 'Donasi Buku';
        return view('donasiBuku', compact('judul','data','nomor'));
    }

    public function peminjaman()
    {   
        $judul = 'Peminjaman Buku';
        $pinjam = Pinjaman::all();
        $i = 1;
        return view('pengurusPeminjamanBuku', compact('judul','pinjam','i'));
    }

    public function pengembalian()
    {
        $judul = 'Pengembalian Buku';
        return view('pengembalianBuku', compact('judul'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = new DataBuku();

        $data->id_card = $request->id_card;
        $data->judul = $request->judul;
        $data->tahun_terbit = $request->tahun;
        $data->pengarang = $request->pengarang;
        $data->penerbit = $request->penerbit;
        $data->status = $request->status;
        $data->foto = $request->file('foto')->store('foto-buku');
        $data->id_rak = $request->rak;

        $data->save();

        return redirect('/donasiBuku');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
