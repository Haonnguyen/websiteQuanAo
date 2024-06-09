<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use App\Models\Product;
use App\Models\Category;
use App\Models\Products;
use Illuminate\Http\Request;

class ProductAdminController extends Controller
{
    public function index()
    {
        $products = Products::with('categories')->orderBy('created_at', 'desc')->get();
        return view('admin.product', compact('products'));
    }

    public function create()
    {
        $categories = Categories::all();
        return view('admin.addpro', compact('categories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'required|numeric',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'detail' => 'required|string',
            'category_id' => 'required|exists:categories,id',
        ]);

        $imageName = null;
        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('images'), $imageName);
        }

        Products::create([
            'title' => $request->title,
            'description' => $request->description,
            'price' => $request->price,
            'image' => $imageName,
            'sold' => 0,
            'detail' => $request->detail,
            'category_id' => $request->category_id,
        ]);

        return redirect()->route('admin.product')->with('success', 'Sản phẩm được tạo thành công.');
    }


public function edit($id)
{
    $product = Products::findOrFail($id);
    $categories = Categories::all();
    return view('admin.editpro', compact('product', 'categories'));
}

public function update(Request $request, $id)
{
    $request->validate([
        'title' => 'required|string|max:255',
        'description' => 'required|string',
        'price' => 'required|numeric',
        'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        'detail' => 'required|string',
        'category_id' => 'required|exists:categories,id',
    ]);

    $product = Products::findOrFail($id);

    $imageName = $product->image;

    if ($request->hasFile('image')) {
        $imageName = time().'.'.$request->image->extension();
        $request->image->move(public_path('images'), $imageName);
    }

    $product->update([
        'title' => $request->title,
        'description' => $request->description,
        'price' => $request->price,
        'image' => $imageName,
        'detail' => $request->detail,
        'category_id' => $request->category_id,
    ]);

    return redirect()->route('admin.product')
                     ->with('success', 'Sản phẩm được cập nhật thành công.');
}

public function destroy($id)
{
    $product = Products::findOrFail($id);
    $product->delete();

    return redirect()->route('admin.product')
                     ->with('success', 'Sản phẩm đã được xóa thành công.');
}
}
