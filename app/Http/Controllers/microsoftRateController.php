<?php

namespace App\Http\Controllers;

use App\Models\microsoftRate;
use Illuminate\Http\Request;

class microsoftRateController extends Controller
{
    public function Rating()
    {

        $data['allData'] = microsoftRate::all();

        return view('backend.microsoft.rating', $data);
    }
}
