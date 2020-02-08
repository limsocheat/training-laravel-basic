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

    // One to Many (reverse)
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

    public function working_hours()
    {
        return $this->belongsToMany(WorkingHour::class)->using(ListingWorkingHour::class);
    }

    // public function working_hours()
    // {
    //     return $this->belongsToMany(WorkingHour::class, 'listing_working_hour');
    // }

    // One to one
    public function customer()
    {
        return $this->hasOne(Customer::class);
    }

    public function customerContact()
    {
        return $this->hasOneThrough(Contact::class, Customer::class);
    }

    // one to Many 
    public function galleries()
    {
        return $this->hasMany(Gallery::class);
    }
}
