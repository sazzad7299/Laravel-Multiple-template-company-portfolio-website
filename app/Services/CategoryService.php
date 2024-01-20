<?php

namespace App\Services;

use App\Models\Category;
use App\Traits\ImageUpload;
use Illuminate\Support\Arr;

class CategoryService
{
    use ImageUpload;

    public function index($request)
    {
        $category = Category::query()
        ->when(request()->get('active'), function ($query) {
            return $query->active();
        })
        ->when(request()->get('search'), function ($query) {
            return $query->search(request()->get('search'));
        })
        ->latest();
        if ($request->has('paginate')) {
            return $category->select(['id', 'name'])->get();
        } else {
            return $category->paginate(request()->get('per_page', 10));
        }
    }
    public function store($category , $request)
    {

        $requestedData = $request->all();
        $feature_image = $request->file('feature_image');
        if ($feature_image) {
            $requestedData['feature_image'] = $this->image($feature_image, 'images/category/', 200,200);
        }
        $category->fill($requestedData)->save();

        return $category;
    }

    public function update($category, $request)
    {
        $requestedData = $request->all();
        $feature_image = $request->file('feature_image');

        if ($feature_image) {
            if (file_exists($category->feature_image)) {
                unlink($category->feature_image);
            }
            $requestedData['feature_image'] = $this->image($feature_image, 'images/category/', 200,200,);
        }

        $requestedData = Arr::except($requestedData, ['feature_image']);

        $category->update($requestedData);

        return $category;
    }

    public function delete($category)
    {
        if (file_exists($category->feature_image)) {
            unlink($category->feature_image);
        }
        $category->delete();
    }
}