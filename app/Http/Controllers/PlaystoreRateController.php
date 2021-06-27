<?php

namespace App\Http\Controllers;

use App\Models\PlaystoreRate;

use Illuminate\Http\Request;

class PlaystoreRateController extends Controller
{
    public function Rating()
    {

        $data['allData'] = PlaystoreRate::all();

        return view('backend.rating.rating', $data);
    }
}
