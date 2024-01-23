<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Services\PostService;
use App\Http\Requests\StorePostRequest;
use App\Http\Requests\UpdatePostRequest;

class TeamController extends Controller
{
    protected $postService;

    public function __construct(PostService $postService)
    {
        $this->postService = $postService;
    }

    public function index(Request $request)
    {
        $posts = Post::query()->team()->paginate(request()->get('per_page', 10));

        return view('backend.team.index',compact('posts'));
    }

    public function create()
    {
        return view('backend.team.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePostRequest $request,Post $post)
    {
        try {
            $this->postService->store($post, $request);
            return redirect()->route('admin.team.index')->with('success','Team Added Successfully');
        } catch (\Throwable $th) {
            return redirect()->route('admin.team.index')->with('error',$th->getMessage());
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
    public function edit(Post $team)
    {
        $teammeta = $team->postmeta;
        foreach($teammeta as $item){
            if($item->meta_key =='gallery'){
                $team[$item->meta_key] = json_decode($item->meta_value);
            } else{
                $team[$item->meta_key] = $item->meta_value;
            }
        }
        return view('backend.team.edit', compact('team',));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePostRequest $request, Post $team)
    {
        try {
            $this->postService->update($team,$request);

            return redirect()->route('admin.team.index')->with('success','Team Update Successfully');
        } catch (\Throwable $e) {
            return redirect()->route('admin.team.index')->with('error',$e->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $team)
    {
        $this->postService->delete($team);
        return redirect()->route('admin.team.index')->with('success','Team Deleted Successfully');
    }
}