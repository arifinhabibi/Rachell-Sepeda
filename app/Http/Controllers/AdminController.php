<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Homepage;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use Illuminate\Support\Facades\Auth;


class AdminController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }


    public function index(){
        return view('Admin.admin');
    }

    // Nav Data produk
    public function TampilanData(){
        $data = Homepage::all();
        return view('Admin.data_produk',compact('data'));
    }


    // create
    public function tambah(){
        $data = Homepage::all();
        return view('Admin.tambah-data', compact('data'));
    }
    public function tambahStore(Request $request){
        $data = Homepage::create($request->all());
        if ($request->hasFile('foto_sepeda')) {
            # code...
            $request->file('foto_sepeda')->move('img/sepeda/', $request->file('foto_sepeda')->getClientOriginalName());
            $data->foto_sepeda = $request->file('foto_sepeda')->getClientOriginalName();
            $data->save();
        }
        return redirect()->route('data')->with('Bisa', 'Data berhasil ditambah');
    }

    // update
    public function edit($id){
        $data = Homepage::find($id);

        return view('Admin.edit-data', compact('data'));
    }

    public function editStore(Request $request, $id){
        $data = Homepage::find($id);
        $data->update($request->all());
        if ($request->hasFile('foto_sepeda')) {
            # code...
            $request->file('foto_sepeda')->move('img/sepeda/', $request->file('foto_sepeda')->getClientOriginalName());
            $data->foto_sepeda = $request->file('foto_sepeda')->getClientOriginalName();
            $data->save();
        }
        return redirect()->route('data')->with('ubah', 'Data berhasil diubah');
    }

    // delete
    public function delete($id){
       $data = Homepage::find($id);
       $data->delete();

       return redirect()->route('data')->with('hapus', 'Data Berhasil Dihapus');
    }

    // Detail data
    public function detail($id){
        $data = Homepage::find($id);

        return view('Admin.detail-data', compact('data'));
    }

    public function profile(){
        return \view('Admin.profile.profile');
    } 
    
    public function profileEdit(Request $request){

        $data = Auth::user();

        // $data = $request->validate([
        //     'username' => 'required|max:25',
        //     'password' => 'required|min:8'
        // ]);

        $data->update($request->validate([
            'username' => 'required|max:25',
            'password' => 'required',
            'avatar' => 'required'
        ]));
        
        $data['password'] = bcrypt($data['password']);
        if ($request->hasFile('avatar')) {
            # code...
            $request->file('avatar')->move('assets/dist/img/avatar', $request->file('avatar')->getClientOriginalName());
            $data->avatar = $request->file('avatar')->getClientOriginalName();
            $data->save();
        }
        return redirect()->route('profile')->with('ubah', 'Profil anda berhasil diubah');
    } 


    // Kategori
    // public function kategori(){
    //     $data = Homepage::all();
    //     return view('Admin.kategori', compact('data'));
    // }

    // public function kategoriStore(Request $request){
    //     $data = DB::table('homepages')->orderBy('kategori');

    //     return redirect()->route('kategori')->with('Bisa', 'Data berhasil ditambah');
    // }
}
