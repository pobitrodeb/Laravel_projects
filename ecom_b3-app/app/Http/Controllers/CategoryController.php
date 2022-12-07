<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    private $categories;
    private $category;
    public function index(){
        return view('admin.category.index');
    }
    public function create( Request $request)
    {
        $request->validate([
            'name' => 'required'
        ]);
        Category::newCategory($request);
        return redirect()->back()->with('message', 'Category info create successfully');
    }
    public function manage(){
     $this->categories = Category::all();
     return view('admin.category.manage', ['categoryries'=> $this->categories]);
    }
    public function edit($id)
    {
        $this->category = Category::find($id);
        return view('admin.category.edit', ['category'=>  $this->category]);
    }
    public function update(Request $request, $id){
            Category::updateCatetory($request, $id);
            return redirect('/manage-category')->with('message', 'Category info update successfully');
    }
    public function delete($id)
    {
         Category:: deletecategory($id);
        return redirect('/manage-category')->with('message', 'Category Delete successfully');
    }
}
