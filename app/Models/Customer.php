<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{

    // One to one (reverse)
    public function listing()
    {
        return $this->belongsTo(Listing::class);
    }

    //One to one
    public function contact()
    {
        return $this->hasOne(Contact::class);
    }
}
