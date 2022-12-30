<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\UpdatePostRequest;
use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $posts = Post::where('user_id', auth()->id())
            ->orderBy('id', 'desc')
            ->paginate(10);

        return view('admin.posts.index', compact('posts'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $categories = Category::all();

        return view('admin.posts.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([

            'title' => 'required|string|max:255',
            'slug' => 'required|string|max:255|unique:posts',
            'category_id' => 'required|integer|exists:categories,id',


        ]);

        // $post=Post::create([
        //     'title' => $request->title,
        //     'category_id' => $request->category_id,
        // ]);


        $post = Post::create($request->all());

        return redirect()->route('admin.posts.edit', $post);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        return view('admin.posts.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        $categories = Category::all();

        return view('admin.posts.edit', compact('post', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePostRequest $request, Post $post)
    {


        //   return $request->all();

        $tags = [];

        foreach ($request->tags ?? [] as $name) {
            // busca y si no encuentra crea 
            $tag = Tag::firstOrCreate(['name' => $name]);


            $tags[] = $tag->id;

            // $tag = Tag::where('name' ,$name)->first();
            // if (!$tag) {
            //     $tag = Tag::create([
            //         'name' => $name,
            //     ]);
            // }
            // $tags[] = $tag->id;

        }

        $post->tags()->sync($tags);

        $post->update($request->all());


        if ($request->hasFile('image')) {

            if ($post->image_url) {
                Storage::delete($post->image_url);
            }

            $nameFile = Str::slug($request->title) . '.' . $request->image->extension();
            $image_url = $request->image->storeAs('posts', $nameFile);

            // $nameFile = Str::slug($request->title) . '.' . $request->image->extension();

            // $image_url = Storage::putFileAs('posts', $request->image, $nameFile);

            $post->image_url = $image_url;
            $post->save();

            // $image_url = Storage::put('posts', $request->file('image'));

            // $post->image_url = $image_url;
            // $post->save();

        }


        return redirect()->route('admin.posts.edit', $post);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        $post->delete();

        return redirect()->route('admin.posts.index');
    }
}
