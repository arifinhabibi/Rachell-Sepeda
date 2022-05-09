<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

// Buat register
use Illuminate\Support\Str;

class AuthController extends Controller
{


    public function login(){
        return view('Auth.sign-in');
    }

    // public function loginStore(Request $request){
    //     if (Auth::attempt($request->only('name', 'password'))) {
    //         # code...
    //         return redirect('/');
    //     }
    //     return redirect()->route('login')->with('gagal', 'email atau password salah');
    // }




    // Register Coming Soon
    // view belum tersedia

    public function register(){
        return view('Auth.sign-up');
    }

    // public function registerStore(Request $request){
    //     User::create([
    //         'name' => $request->name,
    //         'email' => $request->email,
    //         'password' => bcrypt($request->password),
    //         'remember_token' => Str::random(60),
    //     ]);
    //     return redirect('/login');
    // }






    public function registerStore(Request $request){
        $data = $request->validate([
            'username' => 'required|max:25',
            'password' => 'required'
        ]);
        $data['password'] = bcrypt($data['password']);

        User::create($data);
        return redirect()->route('login');
    }

    public function loginStore(Request $request){
        $data = $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);

        if (Auth::attempt($data)) {
            $request->session()->regenerate();

            return redirect()->route('admin');
        }

        return back()->with('error','email atau password salah');
    }
    public function logout(Request $request){

        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regeneratetoken();

        return redirect()->route('login');
    }
}
