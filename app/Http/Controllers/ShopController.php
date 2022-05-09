<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
// use App\Models\Sepeda;
use App\Models\Homepage;



class ShopController extends Controller
{
    public function __construct(){
        // $this->Sepeda = new Sepeda();
    }

    public function index(){
        // $data = [
        //     'sepeda' => $this->Sepeda->alldata(),
        // ];
        $data=Homepage::all();
        return view('shop',compact('data'));
    }

    public function detail($id){
        $data = Homepage::find($id);

        return view('shop-details', compact('data'));
    }

}
