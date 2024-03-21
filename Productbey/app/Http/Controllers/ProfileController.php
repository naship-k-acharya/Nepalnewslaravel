<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class ProfileController extends Controller
{
    /**
     * Display the user's profile form.
     */
    public function edit(Request $request): View
    {
        return view('profile.edit', [
            'user' => $request->user(),
        ]);
    }

    /**
     * Update the user's profile information.
     */
    public function update(ProfileUpdateRequest $request)
{
    $user = $request->user(); 
    $user->fill($request->validated());
    if ($user->isDirty('email')) {
        $user->email_verified_at = null;
    }

if($request->hasfile('profile_image'))
{
    $file = $request->file('profile_image');
    $extension = $file->getClientOriginalExtension(); 
    $filename = time().'.'.$extension;
    $file->move('photos', $filename);
    $user->profile_image = $filename;
}

    $user->save(); // Save the user model
// dd($user);
    return redirect()->route('profile.edit')->with('status', 'profile-updated');
}
public function detail(){
    $users=User::all();
    // dd($users);
    return view('infouser', compact('users'));
}

    /**
     * Delete the user's account.
     */
    public function destroy(Request $request): RedirectResponse
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current_password'],
        ]);

        $user = $request->user();

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }
    public function StoreProfile(Request $request){
        $id = Auth::user()->id;
        $data = User::find($id);
        

        if ($request->file('profile_image')) {
           $file = $request->file('profile_image');

           $filename = date('YmdHi').$file->getClientOriginalName();
           $file->move(public_path('photos'),$filename);
           $data['profile_image'] = $filename;
        }
        $data->save();

        $notification = array(
            'message' => 'Admin Profile Updated Successfully', 
            'alert-type' => 'info'
        );

        return redirect()->route('profile.edit')->with($notification);

    }
    public function destroyuser($id)
    {
        // Find the post by its ID
        $post = User::find($id);

        // Delete the post
        $post->delete();

        // Redirect back or to a different page
        return view('infouser')->with('success', 'Post deleted successfully');
    }
    


}
