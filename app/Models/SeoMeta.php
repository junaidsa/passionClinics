<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SeoMeta extends Model
{
    protected $table = 'seo_meta';
    protected $fillable = [
        'type',
        'page_id',
        'is_parent',
        'lang',
        'slug',
        'meta_title',
        'keywords',
        'robots',
        'description',
    ];
}
