<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function create (){
        return view('Admin.categories.create');
    }
    public function store(Request $request)
    {
        category::create([
            'name' => $request['name']
        ]);
        return redirect()->route('category.create')->with('success' , 'Category Added Successfully');
    }
}
