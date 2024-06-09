<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller; 

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Categories;


class CategoriesController extends Controller
{
    public function index()
    {
        $categories = Categories::all();
        return view('admin.catalog', compact('categories'));
    }

    public function create()
    {
        return view('admin.addcata');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        Categories::create($request->all());

        return redirect()->route('admin.catalog')->with('success', 'Category created successfully.');
    }






    public function edit($id)
{
    $category = Categories::findOrFail($id);
    return view('admin.editcata', compact('category'));
}

public function update(Request $request, $id)
{
    $request->validate([
        'name' => 'required|string|max:255',
    ]);

    // Tìm đối tượng danh mục cần cập nhật
    $category = Categories::findOrFail($id);

    // Cập nhật tên danh mục từ dữ liệu được gửi từ form
    $category->name = $request->name;
    $category->save();

    return redirect()->route('admin.catalog')->with('success', 'Category updated successfully.');
}






public function destroy($id)
{
    $category = Categories::findOrFail($id);
    $category->delete();

    return redirect()->route('admin.catalog')->with('success', 'Category deleted successfully.');
}


    
}

?>