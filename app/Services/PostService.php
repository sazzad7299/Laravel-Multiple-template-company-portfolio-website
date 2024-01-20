<?php

namespace App\Services;

use App\Models\Post;
use App\Models\PostMeta;
use App\Traits\ImageUpload;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;

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
        
        $requestedData = Arr::except($requestedData, ['title','description','date','post_type','feature_image','status','_token', '_method']);
        $this->storeMeta($post->id, $requestedData, auth()->id());
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
    protected function storeMeta($postId, $customFields, $createdBy)
    {
        // Store metadata in postmeta table
        foreach ($customFields as $metaKey => $metaValue) {
            if($metaKey =='gallery'){
                $metaValue =  $this->image($metaValue, 'images/gellary/', 200, 200);
            }
            PostMeta::create([
                'post_id' => $postId,
                'meta_key' => $metaKey,
                'meta_value' => $metaValue,
                'created_by' => $createdBy,
            ]);
            
        }
    }
}