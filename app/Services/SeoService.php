<?php

namespace App\Services;

use App\Models\SeoMeta;

class SeoService
{

    public function create(array $data): SeoMeta
    {
        return SeoMeta::create([
            'type'        => $data['type'],
            'page_id'     => $data['page_id'] ?? null,
            'is_parent'   => $data['is_parent'] ?? true,
            'slug'        => $data['slug'] ?? null,
            'lang'        => $data['lang'] ?? 'en',
            'meta_title'  => $data['meta_title'] ?? null,
            'keywords'    => $data['keywords'] ?? null,
            'robots'      => $data['robots'] ?? null,
            'description' => $data['description'] ?? null,
        ]);
    }

    public function deleteSeo(string $slug, string $lang = 'en'): bool
    {
        $seo = SeoMeta::where('slug', $slug)
            ->where('lang', $lang)
            ->first();

        return $seo ? $seo->delete() : false;
    }
}
