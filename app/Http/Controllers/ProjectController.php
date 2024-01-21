<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Services\PostService;
use App\Http\Requests\StorePostRequest;
use App\Http\Requests\UpdatePostRequest;

class ProjectController extends Controller
{
    protected $postService;

    public function __construct(PostService $postService)
    {
        $this->postService = $postService;
    }

    public function index(Request $request)
    {
        $posts = Post::query()->project()->paginate(request()->get('per_page', 10));
        
        return view('backend.project.index',compact('posts'));
    }

    public function create()
    {
        return view('backend.project.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePostRequest $request,Post $post)
    {
        try {
            $this->postService->store($post, $request);
            return redirect()->route('admin.project.index')->with('success','project Added Successfully');
        } catch (\Throwable $th) {
            return redirect()->route('admin.project.index')->with('error',$th->getMessage());
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
    public function edit(Post $project)
    {
        $projectmeta = $project->postmeta;
        foreach($projectmeta as $item){
            if($item->meta_key =='gallery')
            $project[$item->meta_key] = json_decode($item->meta_value);
            else
            $project[$item->meta_key] = $item->meta_value;
        }
        return view('backend.project.edit', compact('project',));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePostRequest $request, Post $project)
    {
        try {
            $this->postService->update($project,$request);
            
            return redirect()->route('admin.project.index')->with('success','project Update Successfully');
        } catch (\Throwable $e) {
            return redirect()->route('admin.project.index')->with('error',$e->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $project)
    {
        $this->postService->delete($project);
        return redirect()->route('admin.project.index')->with('success','project Deleted Successfully');
    }
}