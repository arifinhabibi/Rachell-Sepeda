<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Homepage extends Model
{
    public $fillable = ['nama_sepeda','harga_sepeda','kategori','deskripsi','spesifikasi','promo','kondisi','foto_sepeda'];

    // public function addData($data){
    //     DB::table('homepages')->insert($data);
    // }

    public function detailData($id){
        return DB::table('homepages')->where('id', $id)->first();
    }

    public function deleteData($id){
        DB::table('homepages')
        ->where('id', $id)
        ->delete();
    }

}
