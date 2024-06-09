<?php

namespace App\Http\Controllers; // Phải viết hoa chữ cái đầu của App

use Illuminate\Http\Request;
use App\Http\Controllers\Controller; // Import lớp Controller từ Laravel

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.index');
    }

    public function user()
    {
        return view('admin.user');
    }

    public function product()
    {
        return view('admin.product');
    }

    public function catalog()
    {
        return view('admin.catalog');
    }
    public function addcata()
    {
        return view('admin.addcata');
    }
    public function editcata()
    {
        return view('admin.editcata');
    }
}

?>
