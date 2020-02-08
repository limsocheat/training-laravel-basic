<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    // Allow to define BelongsToThrough Relationship 
    use \Znck\Eloquent\Traits\BelongsToThrough;

    // one to many (reverse)
    public function listing()
    {
        return $this->belongsTo(Listing::class);
    }

    //hasManyThrough (reverse) == belongsToThrough
    public function user()
    {
        return $this->belongsToThrough(User::class, Listing::class);
    }
}
