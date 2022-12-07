<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\SubCategory;
use Illuminate\Http\Request;

class SubCategoryController extends Controller
{
     private $categories;
    public function index()
    {
        $this->categories = Category::all();
        return view('admin.subcategory.index', ['categories'=>  $this->categories]);
    }
    public function create(Request $request)
    {
      SubCategory::newSubcategory($request);
      return redirect()->back()->with('message', 'Sub Category Create Suessfully');

    }
    public function manage()
    {
        return view('admin.subcategory.manage');
    }
}
