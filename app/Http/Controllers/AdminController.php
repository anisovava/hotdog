<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function admin() {
        return view('admin.admin');
    }

    public function adminTabs() {
        return view('admin.adminTabs');
    }

    public function adminFood() {
        return view('adminFood');
    }

    /*public function store(Request $request) {
       Categories::create($request->all());
       
       return redirect()->route('admin.admin')->width('success', 'Раздел успешно создан');
    }*/
}
