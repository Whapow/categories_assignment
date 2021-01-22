<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public function new(){
        return view('categories.new');
    }

    public function index(){
        return view('categories.index')->with('categories', Category::all());
    }

    public function create(){
        $this->validate(request(), ['name' => 'required']);
        $data = request()->all();
        $category = new Category;
        $category->name = $data['name'];

        $category->save();
        session()->flash('success', 'Category created successfully.');
        
        return redirect('/categories');
        
    }
    
    public function edit(Category $category){
        return view('categories.edit')->with('category', $category);
    }
    
    public function update(Category $category){
        $this->validate(request(), ['name' => 'required']);
        $data = request()->all();

        $category->name = $data['name'];
        $category->save();
        session()->flash('success', 'Category updated successfully.');

        return redirect("/categories");
    }
    
    public function delete(Category $category){
        $category->delete();
        session()->flash('success', 'Category deleted successfully.');

        return redirect("/categories");
    }
}
