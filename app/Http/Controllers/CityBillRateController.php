<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\City;

class CityBillRateController extends Controller
{
    //
    public function manage_city_bill_rate(Request $request)
    {
        # code...
        $data['cities']=City::all();;
        $data['city_id']='';
        return view('admin.manage_city_bill_rate',$data);
    }
}
