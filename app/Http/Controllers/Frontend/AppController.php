<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Listing;
use App\Models\Category;

class AppController extends Controller
{
    public function index()
    {

        $categories     = Category::select(
            'id',
            'title',
            'image',
            'description'
        )->get();

        // dd($categories);

        return view('frontend.index', ['categories' => $categories]);
    }

    public function listings(Request $request)
    {

        $search         = $request->input('search');

        $listingfromdb = Listing::select('id', 'title', 'description', 'image', 'address')
            ->when($search, function ($query, $search) {
                return $query->where('title', 'LIKE', "%$search%");
            })
            ->paginate(12);

        // dd($listingfromdb);

        return view('frontend.listings', ['listings' => $listingfromdb]);
    }

    public function listing(Request $request, $id = 'Socheat')
    {
        $listing = Listing::findOrFail($id);

        return view('frontend.listing', ['listing' => $listing]);
    }

    public function about()
    {
        return view('frontend.about');
    }
}
