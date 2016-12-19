<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Category;

use App\User;

use App\Event;

use Auth;

use Session;

use Intervention\Image\Facades\Image as InterventionImage;

class EventController extends Controller
{
    public function show_add_event()
    {
    	$categories = Category::all();
    	return view('add_event', array('user' => Auth::user()), compact('categories'));
    }

    public function insert_event(request $request)
    { 
       $name = $request->input('name');
       $description = $request->input('description');
       $time = $request->input('datetime');
       $city = $request->input('city');
       $country = $request->input('country');
       $price = $request->input('price');
       $category_id = $request->input('choose_category');
       $user_id = Session::get('user_id');
       //dd($name, $description, $time, $city, $country, $price, $category_id,  $user_id);
       $stripped_name = str_replace(' ','',$name); 

	   $allowed = array("jpg", "png", "gif", "jpeg");
	   $file_name = $request->file('file')->getClientOriginalName();
	   $image = $request->file('file');
	   $input['file'] = $image->getClientOriginalExtension();
	   $ext = explode(".", $file_name);
	   //dd($ext['1']);

	   if (in_array($ext['1'], $allowed)) {
	    //insertanje slike preko interventiona
	    $destinationPath = public_path('event_pictures');
	    $img = InterventionImage::make($image->getRealPath());
	    $img -> save($destinationPath.'/'.$stripped_name.'.'.$ext['1']);

	    Event::insert([
	     'name' => $name,	
	     'image'=>'/event_pictures/'.$stripped_name.'.'.$ext['1'],
	     'description' => $description,
	     'time' => $time,
	     'city' => $city,
	     'country' => $country,
	     'price' => $price,
	     'category_id' => $category_id,
	     'user_id' => $user_id
	     ]);
	   }

	   return redirect('/');
    }
}
