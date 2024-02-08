<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Services\CategoryService;
use Illuminate\Support\Facades\Cache;
use App\Http\Requests\StoreCategoryRequest;
use App\Http\Requests\UpdateCategoryRequest;

class CategoryController extends Controller
{
    protected $categoryService;

    public function __construct(CategoryService $categoryService)
    {
        $this->categoryService = $categoryService;
    }
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $categories = $this->categoryService->index($request);

        return view('backend.category.index',compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        return view('backend.category.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCategoryRequest $request,Category $category)
    {
        try {
            // return $request->all();
            $this->categoryService->store($category,$request);
            Cache::forget('categories');
            return redirect()->route('admin.category.index')->with('success','Category Added Successfully');
        } catch (\Throwable $th) {
            return redirect()->route('admin.category.index')->with('error',$th->getMessage());
        }

    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {
        return view('backend.category.edit',compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCategoryRequest $request, Category $category)
    {
        try {
            $this->categoryService->update($category,$request);
            Cache::forget('categories');
            return redirect()->route('admin.category.index')->with('success','Category Update Successfully');
        } catch (\Throwable $e) {
            return redirect()->route('admin.category.index')->with('error',$e->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        $this->categoryService->delete($category);
        Cache::forget('categories');
        return redirect()->route('admin.category.index')->with('success','Category Deleted Successfully');
    }
}
