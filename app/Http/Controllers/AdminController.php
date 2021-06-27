<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\playstore;
use App\Models\PlaystoreRate;
use App\Models\microsoftRate;
use Auth;
use DB;

class AdminController extends Controller
{
    public function Logout()
    {
        Auth::logout();
        return Redirect()->route('login');
    }

    public function index()
    {
       

        $increment = PlaystoreRate::select(
            DB::raw("App"),
            DB::raw("Installs"),
            DB::raw("Rating")
        )->take(35)->get();

        $res[] = ['App', 'Installs', 'Rating'];

        $all = PlaystoreRate::select(
            DB::raw("App"),
            DB::raw("Installs"),
            DB::raw("Rating")
        )->get();

        $res2[] = ['App', 'Installs', 'Rating'];


        foreach ($increment as $key => $val) {
            $res[++$key] = [$val->App, (int)$val->Installs, (float)$val->Rating];
        }

        foreach ($all as $key => $val) {
            $res2[++$key] = [$val->App, (int)$val->Installs, (float)$val->Rating];
        }





        return view('admin.index')->with('install', PlaystoreRate::max('Installs'))
            ->with('paid', microsoftRate::max('Price'))
            ->with('review', microsoftRate::max('No_of_people_Rated'))
            ->with('allmsreview', microsoftRate::count('No_of_people_Rated'))
            ->with('totapp', microsoftRate::count('Name'))
            ->with('allpsreview', playstore::count('userName'))
            ->with('increment', json_encode($res))
            ->with('all', json_encode($res2));
    }
}
