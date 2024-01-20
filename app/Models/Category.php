<?php

namespace App\Models;

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
}