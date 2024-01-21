<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Services\PostService;
use App\Http\Requests\StorePostRequest;
use App\Http\Requests\UpdatePostRequest;

class PostController extends Controller
{
    protected $postService;

    public function __construct(PostService $postService)
    {
        $this->postService = $postService;
    }

    public function index(Request $request)
    {
        $posts = $this->postService->index($request);
        
        return view('backend.blog.index',compact('posts'));
    }

    public function create()
    {
        return view('backend.blog.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePostRequest $request,Post $post)
    {
        try {
            $this->postService->store($post, $request);
            return redirect()->route('admin.blog.index')->with('success','blog Added Successfully');
        } catch (\Throwable $th) {
            return redirect()->route('admin.blog.index')->with('error',$th->getMessage());
        }
        
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $blog)
    {
        $blogmeta = $blog->postmeta;
        foreach($blogmeta as $item){
            if($item->meta_key =='gallery')
            $blog[$item->meta_key] = json_decode($item->meta_value);
            else
            $blog[$item->meta_key] = $item->meta_value;
        }
        return view('backend.blog.edit', compact('blog',));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePostRequest $request, Post $blog)
    {
        try {
            $this->postService->update($blog,$request);
            
            return redirect()->route('admin.blog.index')->with('success','blog Update Successfully');
        } catch (\Throwable $e) {
            return redirect()->route('admin.blog.index')->with('error',$e->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $blog)
    {
        $this->postService->delete($blog);
        return redirect()->route('admin.blog.index')->with('success','Blog Deleted Successfully');
    }
}