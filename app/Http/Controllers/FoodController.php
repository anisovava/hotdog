<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Food;

class FoodController extends Controller
{
    /** 
     * Display a listing of the resource.
     */
    public function index()
    {
        $food = Food::all(); 

        return view('admin.adminFood')->with('food', $food);       
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create($category_id)
    {
    
        return view('admin.adminFood', compact('category_id'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'sostav'=> 'required|string',
            'weight'=> 'required|integer',
            'price'=> 'required|integer',
            'category_id'=> 'required|exists:category,id',
        ]);

        Food::create([
            'name' => $validated['name'],
            'sostav' => $validated['sostav'],
            'weight' => $validated['weight'],
            'price' => $validated['price'],
            'category_id' => $validated['category_id'],
        ]);

        return redirect()->route('admin.admin')->with('success', 'Еда добавлена!');

       
    }

    /**
     * Display the specified resource.
     */
    

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Food $food)
    {
        return view('admin.FoodEdit', compact('food'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Food $food)
    {
        $food->update($request->all());

        return redirect()->route('admin.admin')->with('success', 'Еда обновлена!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Food $food)
    {
        $food->delete();
        return redirect()->route('admin.admin')->with('success', 'Еда удалена!');
    }
}
