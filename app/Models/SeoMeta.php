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
        'meta_title_en',
        'keywords',
        'keywords_en',
        'robots',
        'description',
        'description_en',
    ];
}
