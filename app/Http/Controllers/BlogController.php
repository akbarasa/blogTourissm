<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use App\Category;
use App\User;

class BlogController extends Controller
{
    //
     public function viewBlog($id){
        if($id != ""){
            $blog = Article::where('user_id','=',$id)->get();;
            
        }else{
            $blog = Article::all();

        }
    	
        return view('blog', ['article'=>$blog]);	
    }

    public function addblog(){
    	$category = Category::all();

    	return view('addblog', ['category'=>$category]);
    }

    public function add(Request $req){
    	$article = new Article();

    	if($req->hasFile('image')){
    		$file = $req->image;
    		$image = $file->getClientOriginalName();
    		$req->file('image')->move('storage/',$image);

            $req->validate([
                'title' => 'required|min:5',
                'category' => 'required',
                'desc' => 'required|min:20'
            ]);

            $article->title = $req->title;
            $article->category_id = $req->category;
            $article->description = $req->desc;
            $article->image = $image;
            $article->user_id = $req->userId;

            $article->save();
    	}

    	
        return redirect()->to('home');
    }

    public function fullStory($id){
        $article = Article::find($id);
        $user = User::all();
       
        return view('fullStory', ['article'=>$article, 'user'=>$user]);
    }

    public function deleteBlog($id){
    	$blog = Article::find($id);
    	$blog->delete();

        //return redirect()->to('blog');
        return redirect()->back();
    }
}
