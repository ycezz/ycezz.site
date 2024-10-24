<?php

namespace App\Http\Controllers;

use App\Models\BannerAdvertisement;
use App\Models\Blog;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    //
    public function index()
    {
        $blogs = Blog::all();

        $featured_blogs = Blog::where('is_featured', 'featured')
        ->where('is_featured', 'featured')
        ->inRandomOrder()
        ->take(3)
        ->get();

        $bannerads = BannerAdvertisement::where('is_active', 'active')
        ->where('type', 'banner')
        ->inRandomOrder()
        // ->take(1)
        ->first();

        return view('front.index', compact('blogs', 'featured_blogs', 'bannerads'));
    }

    public function search(Request $request)
    {
        $request->validate([
            'keyword' => ['required', 'string', 'max:255']
        ]);

        $keyword = $request->keyword;

        $blogs = Blog::where('is_featured', 'featured')
        ->where('name', 'like', '%' .$keyword . '%')->paginate(6);

        return view('front.search', compact('blogs', 'keyword'));
    }
}
