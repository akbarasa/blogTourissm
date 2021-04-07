<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Article;

class CategoryController extends Controller
{
    //
    public function viewCategory($id){
    	$blog = Article::where('category_id', '=', $id)->get();
    	$category = Category::all(); 

    	return view('category', ['article'=>$blog, 'category' => $category]);
    }
}
