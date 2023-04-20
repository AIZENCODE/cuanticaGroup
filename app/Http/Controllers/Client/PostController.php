<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class PostController extends Controller
{


    public function index()
    {

     
        $categories = Category::all();

    
        if (empty(request('category')) && empty(request('search'))  && empty(request('tag')) && empty(request('page'))) {
            $postsrecent = Post::where('is_published', true)
            ->where('outstanding', true)
            ->orderBy('published_at', 'desc')
            ->orderBy('id', 'desc')
            ->limit(3)
            ->get(); 
        }else{
            $postsrecent=[];
        }
       

        $outstanding = [];      
        foreach ($postsrecent as $postrecent ) {
             array_push($outstanding,$postrecent->id);
        }
       
        $postsall = Post::where('is_published', true)
            ->when(request('category') ?? null,function($query){
                $query->whereIn('category_id', request('category'));
            })
            ->orderBy('published_at', 'desc')
            ->orderBy('id', 'desc')
            ->whereNotIn('id', $outstanding)
            ->when(request('tag') ?? null,function($query){
                $query->whereHas('tags', function($query){
                    $query->where('tags.name',request('tag'));
                });
               
            })
            ->when(request('search') ?? null,function($query){
                $query->where('title','LIKE','%'.request('search').'%' );
                    // ->Orwhere('summary','LIKE','%'.request('search').'%' );
            })
            ->paginate(18);



        return view('client.blog', compact('postsrecent', 'postsall', 'categories'));
    }

    public function show(Post $post)
    {
        if (!Gate::allows('published',$post)) {
            abort(403);
        }
        return view('client.posts.show', compact('post'));
    }
}
