<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB; // Import DB facade
use Illuminate\Support\Facades\View; // Import View facade



class TinController extends Controller
{
    function index(){
        return view("home");
    }
    function chitiet($id=0){
        $tin = DB::table('tin')->where('id',$id)->first();
        $data = ['id'=>$id, 'tin'=>$tin];
        return view("chitiet", $data);
    }
    public function tintrongloai($idlt = 0)
    {
        $listtin = DB::table('tin')->where('idlt', $idlt)->get();
        $loaitin = DB::table('loaitin')->where('id', $idlt)->first();
        $loaitin_arr = DB::table('loaitin')->select('id', 'name')->get();
        $data = [
            'idlt' => $idlt,
            'listtin' => $listtin,
            'loaitin' => $loaitin,
            'loaitin_arr' => $loaitin_arr
        ];
        return view('tintrongloai', $data);
    }
    
    
}
