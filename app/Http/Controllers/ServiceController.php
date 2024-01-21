<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Services\PostService;
use App\Http\Requests\StorePostRequest;
use App\Http\Requests\UpdatePostRequest;

class ServiceController extends Controller
{
    protected $postService;

    public function __construct(PostService $postService)
    {
        $this->postService = $postService;
    }

    public function index(Request $request)
    {
        $posts = Post::query()->service()->paginate(request()->get('per_page', 10));
        
        return view('backend.service.index',compact('posts'));
    }

    public function create()
    {
        return view('backend.service.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePostRequest $request,Post $post)
    {
        try {
            $this->postService->store($post, $request);
            return redirect()->route('admin.service.index')->with('success','service Added Successfully');
        } catch (\Throwable $th) {
            return redirect()->route('admin.service.index')->with('error',$th->getMessage());
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
    public function edit(Post $service)
    {
        $servicemeta = $service->postmeta;
        foreach($servicemeta as $item){
            if($item->meta_key =='gallery')
            $service[$item->meta_key] = json_decode($item->meta_value);
            else
            $service[$item->meta_key] = $item->meta_value;
        }
        return view('backend.service.edit', compact('service',));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePostRequest $request, Post $service)
    {
        try {
            $this->postService->update($service,$request);
            
            return redirect()->route('admin.service.index')->with('success','service Update Successfully');
        } catch (\Throwable $e) {
            return redirect()->route('admin.service.index')->with('error',$e->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $service)
    {
        $this->postService->delete($service);
        return redirect()->route('admin.service.index')->with('success','service Deleted Successfully');
    }
}