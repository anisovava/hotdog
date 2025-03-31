<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Support\Facades\File;

class CategoriesController extends Controller
{
     /**
     * Display a listing of the resource.
     */
    public function index()
    {  
       
        $categories = Category::all();
        
        return view('admin.admin')->with('category',$categories);
        
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.adminTabs');
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
        ]);
    
        Category::create($validatedData);
    
        return redirect()->route('admin.admin')->with('success', 'Раздел создан!');
    }

    public function edit(Category $category){
        return view ('admin.TabsEdit', compact('category'));
    }

    public function update(Request $request, Category $category){
        
        $category->update($request->only(['name']));
        return redirect()->back()->with('success', 'Раздел обновлен');
    }


    public function destroy(Category $category){
        $category->delete();
        return redirect()->route('admin.admin')->with('success', 'Раздел удален');
    }

}