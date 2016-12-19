<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

use App\Event;

use App\Category;

use Auth;

class IndexController extends Controller
{
    public function show_index()
    {
    	$events = Event::all();
    	$categories = Category::all();
    	$users = User::all();
    	return view('index', array('user' => Auth::user()), compact('events','categories','users'));
    }
}
