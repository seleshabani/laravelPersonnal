<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Posts;
use App\Models\Categories;
use Illuminate\Support\Facades\Request;

class BlogController extends Controller
{
    public function home()
    {
        $today = date('Y-m-d');
        $yesterday = date('Y-m-d',strtotime($today.'-3 days'));
        $lastweek = date('Y-m-d',strtotime($today.'-7 days'));

        $startDate = Carbon::createFromFormat('Y-m-d',  $today);
        $endDate = Carbon::createFromFormat('Y-m-d', $yesterday);
        $lastEndDate = Carbon::createFromFormat('Y-m-d', $lastweek);
        
        $top4Posts = Posts::orderBy('counter','desc')->limit(4)->get();
        $dailyPosts = Posts::whereBetween('created_at',[$endDate,$startDate])->limit(4)->get();
        $lastsPosts = Posts::whereBetween('created_at',[$lastEndDate,$startDate])->limit(4)->get();

        return view('home',['topPosts'=>$top4Posts,'dailyPosts'=>$dailyPosts,'lastsPosts'=>$lastsPosts]);
    }
    public function categorie($slug)
    {
        $categorie = Categories::where('slug',$slug)->get();
        // dd($categorie);
        $posts = Posts::where('categorie_id',$categorie[0]->id)->paginate(5);
        return view('blog.categorie',['posts'=>$posts,'categorie'=>$categorie[0]]);
    }
    public function single($slug,$newsSlug)
    {
        $post = Posts::where('slug',$newsSlug)->get();
        // dd($post[0]);
        $post[0]->counter = $post[0]->counter + 1;
        // $post[0]->save();
        // dd( $post[0]->save());
        $re = $post[0]->save();
        return view('blog.single',['post'=>$post[0]]);
    }
    public function search(Request $request)
    {

        $query = $request::get('query');
        $posts = Posts::where('title','like',"%$query%")->paginate(5);
        
        return view('blog.search',['posts'=>$posts,'query'=>$query]);
    }

    public function login()
    {
        return view('users.loginchoice');
    }
    public function register()
    {
        return view('users.registerChoice');
    }
}
