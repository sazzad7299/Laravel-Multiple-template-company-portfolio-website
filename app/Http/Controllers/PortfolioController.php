<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Services\PostService;
use App\Http\Requests\StorePostRequest;
use App\Http\Requests\UpdatePostRequest;

class PortfolioController extends Controller
{
    protected $postService;

    public function __construct(PostService $postService)
    {
        $this->postService = $postService;
    }

    public function index(Request $request)
    {
        $posts = Post::query()->portfolio()->paginate(request()->get('per_page', 10));

        return view('backend.portfolio.index',compact('posts'));
    }

    public function create()
    {
        return view('backend.portfolio.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePostRequest $request,Post $post)
    {
        try {
            $this->postService->store($post, $request);
            return redirect()->route('admin.portfolio.index')->with('success','portfolio Added Successfully');
        } catch (\Throwable $th) {
            return redirect()->route('admin.portfolio.index')->with('error',$th->getMessage());
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
    public function edit(Post $portfolio)
    {
        $portfoliometa = $portfolio->postmeta;
        foreach($portfoliometa as $item){
            if($item->meta_key =='gallery'){
                $portfolio[$item->meta_key] = json_decode($item->meta_value);
            } else{
                $portfolio[$item->meta_key] = $item->meta_value;
            }
        }
        return view('backend.portfolio.edit', compact('portfolio',));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePostRequest $request, Post $portfolio)
    {
        try {
            $this->postService->update($portfolio,$request);

            return redirect()->route('admin.portfolio.index')->with('success','portfolio Update Successfully');
        } catch (\Throwable $e) {
            return redirect()->route('admin.portfolio.index')->with('error',$e->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $portfolio)
    {
        $this->postService->delete($portfolio);
        return redirect()->route('admin.portfolio.index')->with('success','portfolio Deleted Successfully');
    }
}
