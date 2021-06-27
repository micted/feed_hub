<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\playstore;

class PlaystoreController extends Controller
{
    public function Review() {

        $data['allData'] = playstore::all();


        return view('backend.review.review',$data);
    }
   
}