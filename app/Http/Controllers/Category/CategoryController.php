<?php

namespace App\Http\Controllers\Category;

use App\Http\Controllers\Controller;
use App\Models\category;
use App\Models\sub_category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(Request $request){
        $subCategorys = sub_category::where('category_id', $request->category_id)->get();
        $categorys = category::select('id', 'category_name')->get();
        return view('index', compact('categorys','subCategorys'));
    }


    public function subcategory(Request $request) {

        
        // Get subcategories based on the category_id passed from the AJAX request
        $subCategories = sub_category::where('category_id', $request->category_id)->get();
        // Return the subcategories as a JSON response
        return response()->json($subCategories);
    }


    // public function subcategory(Request $request, $id){
    //   dd($request->all());
    // }
}
