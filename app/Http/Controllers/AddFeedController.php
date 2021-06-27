<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\playstore;
use App\Models\User;

class AddFeedController extends Controller
{
    public function FeedAdd() {

        $data['allData'] = playstore::all();

        return view('backend.feed.ps_add_feed');
    }

    
    public function FeedStore(Request $request){


        $data['allData'] = playstore::all();

        $play = new playstore();

        $play->userName = $request->name;

        $play->appId = $request->appname;

        $play->content = $request->content;

        //add user image
        if ($request->file('image')) {
    		$file = $request->file('image');
    		$filename = date('YmdHi').$file->getClientOriginalName();
    		$file->move(public_path('upload/play_images'),$filename);
    		$play['userImage'] = $filename;
    	}

        $play->save(); 
        
        $notification = array(
    		'message' => 'Your feedback Inserted Successfully',
    		'alert-type' => 'success'
    	);

        return view('backend.review.review', $data, $notification);



    }
}
