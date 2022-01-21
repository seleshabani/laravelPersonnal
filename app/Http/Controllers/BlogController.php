<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use App\Models\Posts;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function home()
    {
        return view('home');
    }
    public function categorie($slug)
    {
        $categorie = Categories::where('slug',$slug)->get();
        $posts = Posts::where('categorie_id',$categorie[0]->id)->get();
        return view('blog.categorie',['posts'=>$posts,'categorie'=>$categorie[0]]);
    }
    public function single($slug,$newsSlug)
    {
        $post = Posts::where('slug',$newsSlug)->get();
        return view('blog.single',['post'=>$post[0]]);
    }
}
