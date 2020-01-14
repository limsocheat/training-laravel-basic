<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Listing;

class ListingController extends Controller
{
    public function create()
    {
        return view('dashboard.listing.create');
    }

    public function store(Request $request) 
    {

   
        $request->validate([
            'title' => 'min:2|max:10|required|unique:listings,title'
        ]);

        $data   = $request->all();
        Listing::create( $data );
    }
}
