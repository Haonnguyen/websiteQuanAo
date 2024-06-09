<?php

namespace App\Http\Controllers; // Phải viết hoa chữ cái đầu của App

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller; // Import lớp Controller từ Laravel
use App\Models\Products;

class HomeController extends Controller
{
    public function index(){
        return view('home');
    }

    public function detail($id){
        
        $product_one = DB::table('products')->where('id',$id)->first();
        return view('detail',['product_one'=>$product_one,'id' => $id]);
      
    }
    public function login(){
        return view('login');
    }
    public function cart(){
        return view('cart');
    }
    public function checkout(){
        return view('checkout');
    }
    public function shop(){
        $newProducts = Products::newProducts(8)->get();
        $bestsellProducts = Products::bestsellProducts(8)->get();
        return view('shop', compact('newProducts','bestsellProducts'));
    }





    public function productHome(){
        $newProducts = Products::orderBy('created_at', 'desc')->take(8)->get();
        $bestsellProducts = Products::orderBy('sold', 'desc')->take(8)->get();
        return view('home', compact('newProducts'.'bestsellProducts'));
    }

    public function productNew(){
        $newProducts = Products::newProducts(8)->get();
        $bestsellProducts = Products::bestsellProducts(8)->get();
        return view('home', compact('newProducts','bestsellProducts'));
    }
    
   
}

?>
