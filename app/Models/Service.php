<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $guarded = [];
    //
    public function faqs()
{
    return $this->hasMany(Faq::class);
}


public function service_features()
{
    return $this->hasMany(ServiceFeature::class);
}
protected static function boot()
{
    parent::boot();

    static::deleting(function ($service) {
        $service->faqs()->delete();
        $service->service_features()->delete();
    });
}

}
