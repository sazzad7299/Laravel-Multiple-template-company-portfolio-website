<?php

namespace App\Models;

use App\Traits\CreatedUpdatedBy;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class PostMeta extends Model
{
    use HasFactory,SoftDeletes,CreatedUpdatedBy;
    protected $fillable = ['post_id', 'meta_key', 'meta_value'];
    protected $table = 'post_metas';
}