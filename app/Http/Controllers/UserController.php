<?php

namespace App\Http\Controllers;

use App\Models\Pinjaman;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{

    public function index()
    {
        return view('login');
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
 
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            
            $user = User::where('email','=',$request->email)->first();

            if ($user->roles == 'User') {
                return redirect()->intended('/');                
            }elseif ($user->roles == 'Admin') {
                return redirect()->intended('/dataBuku');
            }


        }
 
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }

    public function register(Request $request)
    {
        
        $request->validate([
            'nama' => 'required|min:3|max:255',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:8|max:255'
        ]);

        

        $nama = explode(' ', $request->nama );

        $user = new User();

        if (count($nama)>=2) {
            $user->nama_depan = $nama[0];
            $user->nama_belakang = implode(' ', array_slice($nama,1));
        }
        else{

            $user->nama_depan = $request->nama;
        }
        $user->email = $request->email;
        $user->password = Hash::make($request->password);

        $user->save();
        
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            $request->session()->regenerate();
            
            $user = User::where('email','=',$request->email)->first();
            
            return redirect()->intended('/profil');                
          
        }

        return redirect('login');


    }

    public function show()
    {
        return view('profil');
    }

    public function update(Request $request, $id)
    {
        $user = User::find($id);

        $user->nama_depan = $request->namaDepan;
        $user->nama_belakang = $request->namaBelakang;
        $user->id_card = $request->id_card;
        $user->email = $request->email;
        $user->no_handphone = $request->nomorHP;
        $user->alamat = $request->alamat;
        $user->negara = $request->negara;
        $user->provinsi = $request->provinsi;

        
        $user->save();

        return redirect('/profil');
    }

    public function update_admin(Request $request, $id)
    {
        $user = User::find($id);

        $user->nama_depan = $request->namaDepan;
        $user->nama_belakang = $request->namaBelakang;
        $user->id_card = $request->id_card;
        $user->email = $request->email;
        $user->no_handphone = $request->nomorHP;
        $user->alamat = $request->alamat;
        $user->negara = $request->negara;
        $user->provinsi = $request->provinsi;

        
        $user->save();

        return redirect('/profil/admin');
    }



    

    public function logout(Request $request)
    {
        $request->session()->flush();

        return redirect('/login');
    }
}
