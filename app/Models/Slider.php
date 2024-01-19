<?php

namespace App\Models;

use App\Traits\CreatedUpdatedBy;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Slider extends Model
{
    use HasFactory,CreatedUpdatedBy,SoftDeletes;
    protected $table = 'sliders';
    protected $fillable = ['title', 'description','feature_image','button_text','button_url','status'];

    public function scopeActive($query)
    {
        $query->where('status', 1);
    }

    public function scopeSearch($query, $request)
    {
            return $query->where('title', 'LIKE', '%'.$request.'%')
            ->orWhere('desciption', 'LIKE', '%'.$request.'%');
    }
    
}