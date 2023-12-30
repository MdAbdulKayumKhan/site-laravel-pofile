<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\VisitorModel;

class VisitorController extends Controller
{
    function Visitor()
    {
       $VisitorData = json_decode(VisitorModel::orderBy('id','desc')->take(150)->get());

        return view('backend.Visitor',compact('VisitorData'));
    }
}
