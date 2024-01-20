<?php

namespace App\Services;

use App\Models\Post;
use App\Traits\ImageUpload;
use Illuminate\Support\Arr;

class PostService
{
    use ImageUpload;

    public function index($request)
    {
        $category = Post::query()
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
    public function store($post, $request)
    {
        $requestedData = $request->all();
    
        $feature_image = $request->file('feature_image');
        if ($feature_image) {
            $requestedData['feature_image'] = $this->image($feature_image, 'images/post/', 720, 540);
        }
        $post->fill($requestedData)->save();

        return $post;
    }

    public function update($category, $request)
    {
        $requestedData = $request->all();
        $feature_image = $request->file('feature_image');

        if ($feature_image) {
            if (file_exists($category->feature_image)) {
                unlink($category->feature_image);
            }
            $requestedData['feature_image'] = $this->image($feature_image, 'images/category/', 200, 200);
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
