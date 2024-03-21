<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function search(Request $request)
{
    $search = $request->input('search');
    
    // Perform search query to find posts by title 
    $post = Post::where('title', 'like', '%'.$search.'%')->first();
    
    return view('searchpost', compact('post'));
}
}
