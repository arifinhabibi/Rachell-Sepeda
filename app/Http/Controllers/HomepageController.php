<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use App\Models\Sepeda;
use App\Models\Homepage;


class HomepageController extends Controller
{
    public function __construct(){
        // $this->Sepeda = new Sepeda();
    }

    public function index(){
        // $data = [
        //     'sepeda' => $this->Sepeda->alldata(),
        // ];
        $data=Homepage::paginate(16);
        return view('index',compact('data'));
    }
}
