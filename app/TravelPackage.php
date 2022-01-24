<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TravelPackage extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'package_type', 'slug', 'quota', 'duration_jeep', 'about', 'includes', 'lodging_house', 'eat', 'type', 'price'
    ];

    protected $hidden = [
        // 
    ];

    public function galleries()
    {
        return $this->hasMany(Gallery::class, 'travel_packages_id', 'id');
    }
}
