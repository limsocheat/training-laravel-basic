<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Listing extends Model
{
    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function video()
    {
        return $this->hasOne(Video::class, 'listing_id');
    }

    public function features()
    {
        return $this->belongsToMany(Feature::class, 'listing_feature');
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class, 'listing_tag', 'listings_id', 'tags_id', 'id', 'id');
    }
}
