<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class CustomAuthController extends Controller
{
    public function login(){
        return view('auth.login');
    }

    public function customLogin(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);



        $credentials = [
            'email_212396' => $request->email,
            'password' => $request->password
        ];


        if(Auth::attempt($credentials)){
            return redirect('/');
        }
        return redirect('/login')->with('error', 'Gagal Login');


    }

    public function regist()
    {
        return view('auth.regist');
    }

    public function customRegistration(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'nama' => 'required',
            'alamat' => 'required',
            'hp' => 'required',
            'email' => 'required',
            'password' => 'required',

        ]);

        $data = $request->all();
        $check = $this->create($data);
        return redirect("login")->withSuccess('You have signed-in');
    }


    public function create(array $data)
    {
      return User::create([
        'nama_212396' => $data['nama'],
        'alamat_212396' => $data['alamat'],
        'hp_212396' => $data['hp'],
        'email_212396' => $data['email'],
        'password_212396' => Hash::make($data['password']),
      ]);
    }

    public function updateUser(Request $request){
        $request->validate([
            'nama' => 'required',
            'email' => 'required',
            'hp' => 'required',
            'password' => 'nullable',
            'foto' => 'nullable'
        ]);

        $user = Auth::user();

        if($request->hasFile('foto')){
            $file = $request->file('foto');
            $filename = time().'.'.$file->getClientOriginalExtension();
            $file->move(public_path('storage/User/'), $filename);
            $user->update([
                'foto_212396' => 'User/'.$filename,
            ]);
        }

        if($request->password != null){
            $user->update([
            'password_212396' => Hash::make($request->password),
            ]);
        }

        $user->update([
            'nama_212396' => $request->nama,
            'email_212396' => $request->email,
            'hp_212396' => $request->hp,
        ]);


        return redirect()->back();
    }

    public function logout(){
        Session::flush();
        Auth::logout();

        return redirect('/login');
    }
}
