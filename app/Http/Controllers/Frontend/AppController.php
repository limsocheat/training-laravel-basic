<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Listing;
use App\Models\Category;
use Cohensive\Embed\Facades\Embed;

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
        $listing    = Listing::findOrFail($id);
        $video_url  = $listing->video ?  $listing->video->url :null ;
        $video      = Embed::make($video_url)->parseUrl();

        if($video) {
            $video->setAttribute(['width' => 600]);
            $video  = $video->getHtml();
        } else {
            $video  = null;
        }

        return view('frontend.listing', ['listing' => $listing, 'video' => $video]);
    }

    public function about()
    {
        return view('frontend.about');
    }
}
