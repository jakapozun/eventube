<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

use Auth;

class IndexController extends Controller
{
    public function show_index()
    {
    	return view('index', array('user' => Auth::user()));
    }

    public function show_contact()
    {
    	return view('contact', array('user' => Auth::user()));
    }
}
