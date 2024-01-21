<?php

namespace App\Models;

use App\Models\Category;
use App\Models\PostMeta;
use App\Traits\CreatedUpdatedBy;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{
    use HasFactory,CreatedUpdatedBy,SoftDeletes,Sluggable;
    protected $table = 'posts';

   protected $fillable = ['title','description','feature_image','slug','date', 'post_type'];
    public function scopeActive($query)
    {
        $query->where('status', 1);
    }
    public function scopeBlog($query)
    {
        $query->where('post_type', 'blog');
    }
    public function scopeProject($query)
    {
        $query->where('post_type', 'project');
    }

    public function scopeSearch($query, $request)
    {
            return $query->where('title', 'LIKE', '%'.$request.'%')
            ->orWhere('desciption', 'LIKE', '%'.$request.'%');
    }

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ],
        ];
    }
    public function postmeta(){
        return $this->hasMany(PostMeta::class,'post_id');
    }
    
    public function category()
    {
        return $this->hasOne(PostMeta::class, 'post_id')
            ->where('meta_key', 'category_id');
            // return Category::where('id',$metaCategory->meta_value);
    }
    

}