<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
class CategoryController extends Controller
{
    //
    function AddCategory(Request $request){
        $category = new Category();
        $category->name=$request->cname;
        $categoryImage = time().".".$request->cimage->extension();
    $request->cimage->move(public_path("assets/img/categories"),$categoryImage);
       $category->image = $categoryImage;
       $category->save();
    //    dd($category->image);
    return back()->with("categories","categories submitted");

    }
}