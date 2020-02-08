<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{

    // Allow to define BelongsToThrough Relationship 
    use \Znck\Eloquent\Traits\BelongsToThrough;

    // One to One (Reverse)
    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }

    // Belongs To Through
    public function listing()
    {
        return $this->belongsToThrough(Listing::class, Customer::class);
    }
}
