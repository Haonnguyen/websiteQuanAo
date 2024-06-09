<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;
use App\Models\Orders;
use App\Models\Orderdetails; // Import model Orderdetails
use Illuminate\Support\Facades\Auth;

class CheckoutController extends Controller
{
    public function showCheckout(){
        $cart = session()->get('cart');
        if (!is_array($cart)) {
            // Nếu không phải mảng, gán cho $cart là một mảng trống
            $cart = [];
        }
        $product_id = array_keys($cart);
        $products = Products::whereIn('id',$product_id)->get();
        return view('checkout', compact('products')); 
    }

    public function checkout(Request $request){
        $cart = session()->get('cart');
        if (!is_array($cart)) {
            // Nếu không phải mảng, gán cho $cart là một mảng trống
            $cart = [];
        }
        $product_id = array_keys($cart);
        $products = Products::whereIn('id',$product_id)->get();
        return view('checkout', compact('products')); 
    }

    public function allCheckout(Request $request){
        $cart = session()->get('cart');
        if (!is_array($cart)) {
            // Nếu không phải mảng, gán cho $cart là một mảng trống
            $cart = [];
        }

        // Lưu thông tin đơn hàng vào bảng orders
        $order = new Orders();
        $order->name = $request->firstName . ' ' . $request->lastName;
        $order->phone = $request->phone;
        $order->address = $request->address;
        $order->status = 'Đang xử lí';
        $order->payment_method = 'Tiền Mặt';
        $order->buy_date = now();
        $order->user_id = Auth::id();
        $order->save();

        // Lưu thông tin vào bảng orderdetails
        foreach ($cart as $product_id => $quantity) {
            $products = Products::find($product_id);
            $orderDetails = new Orderdetails();
            $orderDetails->order_id = $order->id;
            $orderDetails->product_id = $product_id;
            $orderDetails->price = $products->price;
            $orderDetails->quantity = $quantity;
            $orderDetails->save();
        }

        // Xóa giỏ hàng sau khi đặt hàng thành công
        session()->forget('cart');

        return redirect()->route('showCheckout')->with('success', 'Đơn hàng đã được đặt thành công.');
    }

    public function showOrders(){
        $order = new Orders(); // Thay thế Order bằng tên model đơn hàng của bạn
        $orders = $order->all(); // Lấy tất cả đơn hàng
        return view('orders', compact('orders')); 
    }
    

    public function cancelOrder($orderId)
    {
        // Xử lý hủy đơn hàng ở đây, ví dụ:
        $order = Orders::find($orderId);
        $order->status = 'Đã hủy';
        $order->save();

        return redirect()->back()->with('success', 'Đơn hàng đã được hủy thành công.');
    }
}
