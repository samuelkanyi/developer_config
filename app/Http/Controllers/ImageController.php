<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class ImageController extends Controller
{
    public function profile(Request $request)
    {
        //validate the form
        $this->validate($request, [
            'profile_image' => 'image|nullable|max:1999'
        ]);

        if ($request->hasFile('profile_image')) {
            $fileToStore = $request->file('profile_image')->getClientOriginalName();
            $request->file('profile_image')->storeAs('public', $fileToStore);
        } else {
            $fileToStore = 'noimage.jpg';
        }
        $user = User::find(auth()->user()->id);
        $user->avatar = $fileToStore;
        $user->save();
        return redirect('home');
                
        }

}
