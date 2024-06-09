<?php

namespace App\Http\Controllers; // Phải viết hoa chữ cái đầu của App

use Illuminate\Http\Request;
use App\Http\Controllers\Controller; // Import lớp Controller từ Laravel
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Arr;
use App\Models\Products;

class CartController extends Controller
{
    public function cart()
    {
        $cart = Session::get('cart');
        if (!is_array($cart)) {
            // Nếu không phải mảng, gán cho $cart là một mảng trống
            $cart = [];
        }
        $product_id = array_keys($cart);
        $products = Products::whereIn('id',$product_id)->get();
        return view('cart', compact('products'));
    }
    public function addCart(Request $request)
{
    // Kiểm tra nếu người dùng chưa đăng nhập
    if (!auth()->check()) {
        return redirect()->route('loginForm')->with('error', 'Bạn phải đăng nhập để thêm sản phẩm vào giỏ hàng.');
    }

    $product_id = $request->product_id;
    $quantity = $request->quantity;

    if (is_null(Session::get('cart'))) {
        Session::put('cart', [
            $product_id => $quantity,
        ]);
        return redirect()->route('cart');
    } else {
        $cart = Session::get('cart');
        if (Arr::exists($cart, $product_id)) {
            $cart[$product_id] = $cart[$product_id] + $quantity;
            Session::put('cart', $cart);
            return redirect()->route('cart');
        } else {
            $cart[$product_id] = $quantity;
            Session::put('cart', $cart);
            return redirect()->route('cart');
        }
    }
}

    public function delCart(Request $request){
        $cart = Session::get('cart');
        $product_id = $request->id;
        unset($cart[$product_id]);
        Session::put('cart',$cart);
        return redirect()->route('cart');
    }
    public function updateCart(Request $request)
    {
        $cart = Session::get('cart');
        $product_id = $request->product_id;
        $quantity = $request->quantity;
    
        if (isset($cart[$product_id])) {
            $cart[$product_id] = $quantity;
            Session::put('cart', $cart);
    
            $total = 0;
            foreach ($cart as $id => $qty) {
                $product = Products::find($id);
                $total += $product->price * $qty;
            }
    
            return response()->json([
                'success' => true,
                'total' => number_format($total)
            ]);
        }
    
        return response()->json(['success' => false]);
    }
    
}




?>