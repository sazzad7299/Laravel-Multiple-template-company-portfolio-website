<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Services\PostService;
use App\Http\Requests\StorePostRequest;
use App\Http\Requests\UpdatePostRequest;

class GalleryController extends Controller
{
    protected $postService;

    public function __construct(PostService $postService)
    {
        $this->postService = $postService;
    }

    public function index(Request $request)
    {
        $posts = Post::query()->gallery()->paginate(request()->get('per_page', 10));

        return view('backend.gallery.index',compact('posts'));
    }

    public function create()
    {
        return view('backend.gallery.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePostRequest $request,Post $post)
    {
        try {
            $this->postService->store($post, $request);
            return redirect()->route('admin.gallery.index')->with('success','Gallery Added Successfully');
        } catch (\Throwable $th) {
            return redirect()->route('admin.gallery.index')->with('error',$th->getMessage());
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
    public function edit(Post $gallery)
    {
        $servicemeta = $gallery->postmeta;
        foreach($servicemeta as $item){
            if($item->meta_key =='gallery')
            $gallery[$item->meta_key] = json_decode($item->meta_value);
            else
            $gallery[$item->meta_key] = $item->meta_value;
        }
        return view('backend.gallery.edit', compact('gallery'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePostRequest $request, Post $service)
    {
        try {
            $this->postService->update($service,$request);

            return redirect()->route('admin.gallery.index')->with('success','Gallery Update Successfully');
        } catch (\Throwable $e) {
            return redirect()->route('admin.gallery.index')->with('error',$e->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $service)
    {
        $this->postService->delete($service);
        return redirect()->route('admin.gallery.index')->with('success','Gallery Deleted Successfully');
    }
}
