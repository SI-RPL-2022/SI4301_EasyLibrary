<?php

namespace App\Http\Controllers;

use App\Models\DataBuku;
use App\Models\DataRak;
use App\Models\Pinjaman;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Session;

class DataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function dashboard()
    {
        $pinjam = Pinjaman::all();
        $kembali = Pinjaman::where('status', '=', 'Dikembalikan')->get();
        $judul = 'Dashboard';
        return view('dashboard', compact('judul', 'pinjam', 'kembali'));
    }

    public function report()
    {
        $pinjam = Pinjaman::select('id', 'created_at')
            ->get()
            ->groupBy(function ($date) {
                //return Carbon::parse($date->created_at)->format('Y'); // grouping by years
                return Carbon::parse($date->created_at)->format('m'); // grouping by months
            });

        $usermcount = [];
        $userArr = [];

        foreach ($pinjam as $key => $value) {
            $usermcount[(int)$key] = count($value);
        }

        for ($i = 1; $i <= 12; $i++) {
            if (!empty($usermcount[$i])) {
                $userArr[$i] = $usermcount[$i];
            } else {
                $userArr[$i] = 0;
            }
        }

        $donasi = DataBuku::select('id', 'created_at')
            ->where('tipe_buku', '=', 'Donasi')
            ->get()
            ->groupBy(function ($date) {
                //return Carbon::parse($date->created_at)->format('Y'); // grouping by years
                return Carbon::parse($date->created_at)->format('m'); // grouping by months
            });

        $donasimcount = [];
        $donasiArr = [];

        foreach ($donasi as $key => $value) {
            $donasimcount[(int)$key] = count($value);
        }

        for ($i = 1; $i <= 12; $i++) {
            if (!empty($donasimcount[$i])) {
                $donasiArr[$i] = $donasimcount[$i];
            } else {
                $donasiArr[$i] = 0;
            }
        }
        $judul = 'Dashboard';
        return view('report', compact('judul', 'userArr','donasiArr'));
    }
    public function index()
    {
        $data = DataBuku::all();
        $pinjam = Pinjaman::all();
        $kembali = Pinjaman::where('status', '=', 'Dikembalikan')->get();
        $nomor = 1;
        $judul = 'Data Buku';
        $rak = DataRak::all();
        return view('dataBuku', compact('judul', 'data', 'nomor', 'rak', 'pinjam', 'kembali'));
    }

    public function donasi()
    {
        $data = DataBuku::where('tipe_buku', '=', 'Donasi')->get();
        $nomor = 1;
        $judul = 'Donasi Buku';
        $rak = DataRak::all();
        return view('donasiBuku', compact('judul', 'data', 'nomor', 'rak'));
    }

    public function peminjaman()
    {
        $judul = 'Peminjaman Buku';
        $pinjam = Pinjaman::whereNot('status', '=', 'Dikembalikan')->get();
        $user = User::where('roles','=','User')->get();
        $buku = DataBuku::all();
        $i = 1;
        return view('pengurusPeminjamanBuku', compact('judul', 'pinjam', 'i','user','buku'));
    }

    public function pengembalian()
    {
        $pinjam = Pinjaman::where('status', '=', 'Dikembalikan')->get();
        $judul = 'Pengembalian Buku';
        return view('pengembalianBuku', compact('judul', 'pinjam'));
    }

    public function input_pengembalian(Request $request)
    {
        $pinjam = Pinjaman::where('peminjaman_id', '=', $request->peminjaman_id)->first();

        $pinjam->status = 'Dikembalikan';
        $pinjam->tanggal_real_kembali = now();

        $pinjam->save();

        return back();
    }

    public function data_rak()
    {
        $rak = DataRak::all();
        $judul = 'Data Rak';
        return view('dataRak', compact('judul', 'rak'));
    }

    public function input_rak(Request $request)
    {
        $rak = new DataRak();
        $rak->nomor = $request->nomor;
        $rak->kapasitas = $request->kapasitas;
        $rak->jenis = $request->jenis;

        $rak->save();

        return back();
    }

    public function update_rak(Request $request, $id)
    {
        $rak = DataRak::find($id);
        $rak->nomor = $request->nomor;
        $rak->kapasitas = $request->kapasitas;
        $rak->jenis = $request->jenis;

        $rak->save();

        return back();
    }

    public function data_user()
    {
        $user = User::whereNot('roles', '=', 'Admin')->get();

        $judul = 'Data User';

        return view('dataUser', compact('user', 'judul'));
    }

    public function pinjam(Request $request)
    {
        $pinjam  = new Pinjaman();

        $no_rand = rand(00000, 99999);

        $pinjam->peminjaman_id = "IDPJMN-" . $no_rand;
        $pinjam->tanggal_pinjam = $request->tanggal_pinjam;
        $pinjam->tanggal_kembali = $request->tanggal_kembali;

        $user = User::where('id_card', '=', $request->user_id)->first();

        if (!$user) {
            return redirect('/pengurusPeminjamanBuku')->with('user', 'User tidak terdaftar');
        }

        $buku = DataBuku::where('id_buku', '=', $request->buku_id)->first();

        if (!$buku) {
            return redirect('/pengurusPeminjamanBuku')->with('buku', 'Buku tidak terdaftar');
        }

        $pinjam->user_id = $user->id;
        $pinjam->buku_id = $buku->id;
        $pinjam->status = 'Pending';

        $pinjam->save();

        return redirect('/pengurusPeminjamanBuku');
    }

    public function update_pinjam(Request $request, $id)
    {
        $pinjam  = Pinjaman::find($id);

        $pinjam->tanggal_pinjam = $request->tanggal_pinjam;
        $pinjam->tanggal_kembali = $request->tanggal_kembali;

        $user = User::where('id_card', '=', $request->user_id)->first();

        if (!$user) {
            return redirect('/pengurusPeminjamanBuku')->with('user', 'User tidak terdaftar');
        }

        $buku = DataBuku::where('id_buku', '=', $request->buku_id)->first();

        if (!$buku) {
            return redirect('/pengurusPeminjamanBuku')->with('buku', 'Buku tidak terdaftar');
        }




        $pinjam->user_id = $user->id;
        $pinjam->buku_id = $buku->id;
        $pinjam->status = $request->status;

        $pinjam->save();

        return redirect('/pengurusPeminjamanBuku');
    }

    public function del_rak($id)
    {
        $rak = DataRak::find($id)->delete();

        return back();
    }

    public function profil()
    {
        $judul = 'Profil Admin';
        return view('profilAdmin', compact('judul'));
    }

    public function store(Request $request)
    {
        $data = new DataBuku();

        $user = User::where('id_card', '=', $request->id_card)->first();

        $random = rand(00000, 99999);

        $data->user_id = $user->id;
        $data->id_buku = 'KDBDONASI-' . $random;
        $data->judul = $request->judul;
        $data->tahun_terbit = $request->tahun;
        $data->pengarang = $request->pengarang;
        $data->penerbit = $request->penerbit;
        $data->status = $request->status;
        $data->foto = $request->file('foto')->store('foto-buku');
        $data->rak_id = $request->rak;
        $data->tipe_buku = 'Donasi';

        $data->save();

        return redirect('/donasiBuku');
    }

    public function store_buku(Request $request)
    {
        $data = new DataBuku();

        $random = rand(00000, 99999);

        $data->id_buku = 'KDBINPUT-' . $random;
        $data->judul = $request->judul;
        $data->tahun_terbit = $request->tahun;
        $data->pengarang = $request->pengarang;
        $data->penerbit = $request->penerbit;
        $data->status = $request->status;
        $data->foto = $request->file('foto')->store('foto-buku');
        $data->rak_id = $request->rak;
        $data->tipe_buku = 'Inputan';

        $data->save();

        return redirect('/dataBuku');
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
    public function update_buku(Request $request, $id)
    {
        $data = DataBuku::find($id);
        $data->judul = $request->judul;
        $data->tahun_terbit = $request->tahun;
        $data->pengarang = $request->pengarang;
        $data->penerbit = $request->penerbit;
        $data->status = $request->status;

        if ($request->foto) {
            $data->foto = $request->file('foto')->store('foto-buku');
        }

        $data->rak_id = $request->rak;


        $data->save();



        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function del_buku($id)
    {
        $buku = DataBuku::find($id);

        File::delete($buku->foto);

        $buku->delete();

        return back();
    }

    public function destroy($id)
    {
        //
    }
}
