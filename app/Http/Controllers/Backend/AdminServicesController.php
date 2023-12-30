<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\ServicesModel;

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
}
