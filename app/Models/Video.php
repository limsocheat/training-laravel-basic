<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    
    public function listing()
    {
        return $this->belongsTo(Listing::class, 'listing_id', 'id');
    }

}
