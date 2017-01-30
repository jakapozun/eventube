<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use Auth;

use File;

use App\Event;

use DateTime;

use Session;

class VideoController extends Controller
{
	public function insert_video(request $request)
	{		
		$uploadVideo = $request->file('file');
		$title =  $request->input('title');
		$user_id = Session::get('user_id');

		$datetime = new DateTime();
        $date = $datetime->format('YmdHis');

	            //dovoljeni formati
		$allowed = array("vmw", "mp4", "avi", "mov");

	            //dobivanje imena datoteke
		$file_name= $uploadVideo->getClientOriginalName();

	            //brisanje presledkov iz naslova posta
		$file_title = str_replace(' ', '', $title);

	            //preveri, če je eden od zgornjih formatov (da je datoteka res video in ne slika,...)
		$ext = explode(".", $file_name);
		if (in_array($ext['1'], $allowed) && !empty($title)) 
		{

	                //preveri, če prava lokacija za datoteko že obstaja, če ne jo ustvari
			$path="event_videos/".Auth::user()->id;
			if(!File::exists($path)) 
			{
				$makedirectory = File::makeDirectory($path, 0777, true);
			}

	                //ustvarjanje imena datoteke - primer: 20161230163357_1_Anotherone.mp4
			$name = $date.'_'.Auth::user()->id.'_'.$file_title.'.'.$ext['1'];

	                //premikanje videa na pravo lokacijo
			$destinationPath = public_path($path);
			$uploadVideo->move($destinationPath, $name);

	                //insertanje podatkov o videu v tabelo media
			/*Event::insert([
				'post_id' => $post_id,
				'url' => '/'.$path.'/'.$name,
				'created_at' => $datetime,
				'updated_at' => $datetime,
				]);*/

			Event::where('id', $user_id)->update(['video' => '/'.$path.'/'.$name]);

			return redirect('/');
		}
	}
}
