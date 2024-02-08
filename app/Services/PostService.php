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

        if($requestedData['post_type'] === "featured"){
            $width = 1200;
            $height = 480;
        }elseif($requestedData['post_type'] === "team"){
            $width = 200;
            $height = 200;
        }else{
            $width = 720;
            $height = 540;
        }
        $feature_image = $request->file('feature_image');
        if ($feature_image) {
            $requestedData['feature_image'] = $this->image($feature_image, 'public/images/post/', $width, $height);
        }
        $post->fill($requestedData)->save();

        $requestedData = Arr::except($requestedData, ['title','description','date','post_type','feature_image','status','_token', '_method']);
        $this->storeMeta($post->id, $requestedData, auth()->id());
        return $post;
    }

    public function update($post, $request)
    {
        $requestedData = $request->all();
        $feature_image = $request->file('feature_image');
        if($requestedData['post_type'] === "featured"){
            $width = 1200;
            $height = 480;
        }elseif($requestedData['post_type'] === "team"){
            $width = 200;
            $height = 200;
        }else{
            $width = 720;
            $height = 540;
        }
        if ($feature_image) {
            if (file_exists($post->feature_image)) {
                unlink($post->feature_image);
            }
            $requestedData['feature_image'] = $this->image($feature_image, 'public/images/post/', $width, $height);
        }

        $requestedData = Arr::except($requestedData, ['feature_image']);

        $post->update($requestedData);
        $requestedData = Arr::except($requestedData, ['title', 'description', 'date', 'post_type', 'feature_image', 'status', '_token', '_method']);
         $this->updateMeta($post->id, $requestedData, auth()->id());

        return $post;
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
                $metaValue =  $this->image($metaValue, 'public/images/gallery/', 720, 640);
            }
            PostMeta::create([
                'post_id' => $postId,
                'meta_key' => $metaKey,
                'meta_value' => $metaValue,
                'created_by' => $createdBy,
            ]);

        }
    }
    protected function updateMeta($postId, $customFields, $updatedBy)
    {
        // Update metadata in postmeta table
        foreach ($customFields as $metaKey => $metaValue) {
            if ($metaKey == 'gallery') {
                $metaValue = $this->image($metaValue, 'public/images/gallery/', 720, 640);
            }

            // Use updateOrcreate to update existing record or create a new one if not exists
            PostMeta::updateOrcreate(
                ['post_id' => $postId, 'meta_key' => $metaKey],
                [
                    'meta_value' => $metaValue,
                    'updated_by' => $updatedBy,
                ]
            );
        }
    }
}
