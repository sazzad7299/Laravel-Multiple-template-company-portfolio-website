<?php

namespace App\Models;

use App\Models\Category;
use App\Traits\CreatedUpdatedBy;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Slider extends Model
{
    use HasFactory,CreatedUpdatedBy,SoftDeletes;
    protected $table = 'sliders';
    protected $fillable = ['title', 'description','feature_image','button_text','category_id','button_url','status'];

    public function scopeActive($query)
    {
        $query->where('status', 1);
    }

    public function scopeSearch($query, $request)
    {
            return $query->where('title', 'LIKE', '%'.$request.'%')
            ->orWhere('desciption', 'LIKE', '%'.$request.'%');
    }
    public function category(){
        return $this->belongsTo(Category::class)->withDefault(['title'=>"Uncategories"]);
    }

}
