<?php

namespace App\Http\Controllers; // Phải viết hoa chữ cái đầu của App

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller; // Import lớp Controller từ Laravel
use App\Models\Products;
use App\Models\Categories;

class ProductController extends Controller
{
  

    public function detail($id)
{
    $product_one = Products::find($id);
    
    if (!$product_one) {
        abort(404); // Nếu không tìm thấy sản phẩm, trả về trang 404
    }

    // Lấy category_id từ sản phẩm hiện tại
    $category_id = $product_one->category_id;

    // Lấy các sản phẩm liên quan bằng phương thức trong model
    $product = new Products();
    $splq=Products::where('category_id', $product_one->category_id)->where('id','<>',$product_one->id)->get();

    return view('detail', [
        'product_one' => $product_one,
        'splq' => $splq,
        'id' => $id
    ]);
}

    public function shop(){
        $newProducts = Products::all();
     
        $categories = Categories::all();
        return view('shop', compact('newProducts','categories'));
    }
   
    public function catalog(Request $request){
        $newProducts = Products::where('category_id', $request->category_id)->get();
     
        $categories = Categories::all();
        return view('shop', compact('newProducts','categories'));
    }



    public function search(Request $request)
{
    // Lấy các sản phẩm theo category_id nếu có
    $newProducts = Products::where('category_id', $request->category_id)->get();

    // Lấy tất cả các categories
    $categories = Categories::all();

    // Lấy từ khóa tìm kiếm từ query parameters
    $kyw = $request->query('query'); // 'keyword' là tên tham số bạn muốn lấy

    // Cập nhật truy vấn sản phẩm với từ khóa tìm kiếm
    if ($kyw) {
        $newProducts = Products::where('title', 'LIKE', "%$kyw%")
            ->orWhere('description', 'LIKE', "%$kyw%")
            ->orderBy('id', 'DESC')
            ->get(); // Thêm get() để lấy kết quả
    }

    // Trả về view với các biến
    return view('shop', compact('newProducts', 'categories'));
}










    //ADMIN
    
    
   
}

?>
