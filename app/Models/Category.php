<?php

namespace App\Models;

use App\Models\Post;
use App\Models\PostMeta;
use App\Traits\CreatedUpdatedBy;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Category extends Model
{
    use HasFactory,CreatedUpdatedBy, SoftDeletes;
    protected $table ='categories';
    protected $fillable = ['title','description','feature_image'];
    public function scopeActive($query)
    {
        $query->where('status', 1);
    }

    public function scopeSearch($query, $request)
    {
            return $query->where('title', 'LIKE', '%'.$request.'%')
            ->orWhere('desciption', 'LIKE', '%'.$request.'%');
    }
    public function posts()
    {
        return $this->hasMany(PostMeta::class, 'meta_value', 'id')
            ->where('meta_key', 'category_id');
    }
}