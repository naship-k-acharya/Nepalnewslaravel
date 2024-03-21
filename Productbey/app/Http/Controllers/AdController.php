<?php

namespace App\Http\Controllers;

use App\Models\Ads;
use Illuminate\Http\Request;

class AdController extends Controller
{
    public function stores(Request $request)
    {
        // Validate the request
        $request->validate([
           
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'link' => 'required|string',
        ]);
       
        // Create a new post
        $ads = new Ads;
        
        if($request->hasfile('image'))
        {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension(); 
            $filename = time().'.'.$extension;
            $file->move('photos', $filename);
            $ads->image = $filename;
        }
        $ads->link = $request->link;
        $ads->save();

        // Redirect back or to a thank you page
        return view('index', ['ads' => $ads]);
    }
    
    public function showads()
    {
        
        $ads = Ads::all();  

        // Pass the post data to the Blade view
        return view('addads', ['ads' => $ads]);
    }
    public function destroy($id)
    {
        // Find the post by its ID
        $post = Ads::findOrFail($id);

        // Delete the post
        $post->delete();

        // Redirect back or to a different page
        return view('addads')->with('success', 'Post deleted successfully');
    }
}
