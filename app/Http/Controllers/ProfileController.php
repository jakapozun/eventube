<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

use Auth;

use Image;

class ProfileController extends Controller
{
    public function show_profile()
    {
    	return view('profile', array('user' => Auth::user()));
    }

    public function add_avatar(Request $request)
    {
    	if($request->hasFile('avatar'))
    	{
    		$avatar = $request->file('avatar');
    		$filename = time() . '.' . $avatar->getClientOriginalExtension();
    		Image::make($avatar)->resize(300, 300)->save(public_path('/avatars/' . $filename));

    		$user = Auth::user();
    		$user->avatar = $filename;
    		$user->save();
    	}

		return view('profile', array('user' => Auth::user()));
    }
}
