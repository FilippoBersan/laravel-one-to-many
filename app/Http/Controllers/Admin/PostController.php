<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StorePostRequest;
use App\Http\Requests\UpdatePostRequest;
use App\Models\Post;
use App\Models\Type;
use Illuminate\Support\Str;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $posts= Post::all();






        return view( 'admin.posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    
    {

        $types = Type::all();
        //
        return view('admin.posts.create', compact('types'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePostRequest $request)
    {

        // dd($request->all());
        //

        // $data = $request->all();

        // $post = new Post();

        // $post->save();

        $data = $request->validated();

        $post = new Post();


     
        $post->title = $data['title'];
         $post->content = $data['content'];
         
    //    
          $post->slug = Str::of($post->title)->slug('-');

          $post->save();



          return redirect()->route('admin.posts.index')->with('message',"Post $post->title creato correttamente");


    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        //
        // return 'sono il dettaglio';

        // $post = Post::where('slug', $slug)->first();

        // dd($post); 

        return view('admin.posts.show' , compact('post'));
  
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePostRequest $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        //
    }
}
