<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Services\PostService;
use App\Http\Requests\StorePostRequest;
use App\Http\Requests\UpdatePostRequest;

class RoomController extends Controller
{
    protected $postService;

    public function __construct(PostService $postService)
    {
        $this->postService = $postService;
    }

    public function index(Request $request)
    {
        $posts = Post::query()->room()->paginate(request()->get('per_page', 10));

        return view('backend.room.index',compact('posts'));
    }

    public function create()
    {
        return view('backend.room.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePostRequest $request,Post $post)
    {
        try {
            $this->postService->store($post, $request);
            return redirect()->route('admin.room.index')->with('success','room Added Successfully');
        } catch (\Throwable $th) {
            return redirect()->route('admin.room.index')->with('error',$th->getMessage());
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
    public function edit(Post $room)
    {
        $roommeta = $room->postmeta;
        foreach($roommeta as $item){
            if($item->meta_key =='gallery')
            $room[$item->meta_key] = json_decode($item->meta_value);
            else
            $room[$item->meta_key] = $item->meta_value;
        }
        return view('backend.room.edit', compact('room',));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePostRequest $request, Post $room)
    {
        try {
            $this->postService->update($room,$request);

            return redirect()->route('admin.room.index')->with('success','room Update Successfully');
        } catch (\Throwable $e) {
            return redirect()->route('admin.room.index')->with('error',$e->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $room)
    {
        $this->postService->delete($room);
        return redirect()->route('admin.room.index')->with('success','Blog Deleted Successfully');
    }
}
