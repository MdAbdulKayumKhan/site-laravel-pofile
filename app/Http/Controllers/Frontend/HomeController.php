<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\VisitorModel;
use App\Models\ServicesModel;

class HomeController extends Controller
{
    function HomeIndex()
    {
        $UserIP = $_SERVER['REMOTE_ADDR'];
        date_default_timezone_set("Asia/Dhaka");
        $timeDate = date("Y-m-d h:i:sa");

        VisitorModel::insert(['ip_address'=>$UserIP, 'visit_time'=>$timeDate]);

        $ServicesData =ServicesModel::all();
        return view('frontend.Home', compact('ServicesData'));
    }
}
