<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Services\PostService;
use App\Http\Requests\StorePostRequest;
use App\Http\Requests\UpdatePostRequest;

class TestiominalController extends Controller
{
    protected $postService;

    public function __construct(PostService $postService)
    {
        $this->postService = $postService;
    }

    public function index(Request $request)
    {
        $posts = Post::query()->testiominal()->paginate(request()->get('per_page', 10));

        return view('backend.testiominal.index',compact('posts'));
    }

    public function create()
    {
        return view('backend.testiominal.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePostRequest $request,Post $post)
    {
        try {
            $this->postService->store($post, $request);
            return redirect()->route('admin.testiominal.index')->with('success','Testiominal Added Successfully');
        } catch (\Throwable $th) {
            return redirect()->route('admin.testiominal.index')->with('error',$th->getMessage());
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
    public function edit(Post $testiominal)
    {
        $testiominalmeta = $testiominal->postmeta;
        foreach($testiominalmeta as $item){
            if($item->meta_key =='gallery'){
                $testiominal[$item->meta_key] = json_decode($item->meta_value);
            } else{
                $testiominal[$item->meta_key] = $item->meta_value;
            }
        }
        return view('backend.testiominal.edit', compact('testiominal',));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePostRequest $request, Post $testiominal)
    {
        try {
            $this->postService->update($testiominal,$request);

            return redirect()->route('admin.testiominal.index')->with('success','Testiominal Update Successfully');
        } catch (\Throwable $e) {
            return redirect()->route('admin.testiominal.index')->with('error',$e->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $testiominal)
    {
        $this->postService->delete($testiominal);
        return redirect()->route('admin.testiominal.index')->with('success','Testiominal Deleted Successfully');
    }
}