<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\ServicesModel;
use Illuminate\Http\Request;

class AdminServicesController extends Controller
{
    function AdminServices()
    {
        return view('backend.AdminServices');
    }
    function getAdminServices()
    {
        $result = json_decode( ServicesModel::all());
        return $result;

    }
    function AdminServiceDelete(Request $request)
    {
       $id = $request->input('id');
        $result = ServicesModel::where('id','=',$id)->delete();
        if ($result){
            return 1;
        }else{
            return 0;
        }

    }
}
