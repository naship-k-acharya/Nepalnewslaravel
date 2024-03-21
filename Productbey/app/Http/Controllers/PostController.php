<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Carbon\Carbon;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function store(Request $request)
    {
        // Validate the request
        $request->validate([
            'title' => 'required|string|max:255',
            'author' => 'required|string|max:255',
            'content' => 'required|string',
            'photo' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
       
        // Create a new post 
        $post = new Post;
        $post->title = $request->title;
        $post->author = $request->author;
        $post->content = $request->content;
        if($request->hasfile('photo'))
        {
            $file = $request->file('photo');
            $extension = $file->getClientOriginalExtension(); 
            $filename = time().'.'.$extension;
            $file->move('photos', $filename);
            $post->photo = $filename;
        }
        $post->save();
        session()->flash('success', 'Post created successfully!');
        // Redirect back or to a thank you page
        return view('index', ['post' => $post]);
    }
    public function showPost()
    {
        
        $post = Post::all();  

        // Pass the post data to the Blade view
        return view('addpost', ['post' => $post]);
    }
    public function destroy($id)
    {
        // Find the post by its ID
        $post = Post::findOrFail($id);

        // Delete the post
        $post->delete();

        // Redirect back or to a different page
        return redirect('addpost')->with('success', 'Post deleted successfully');
    }
    public function countpost()
{
    $postcount = Post::count();
    return view('admin.dashboard', compact('postcount'));
}
   
}
