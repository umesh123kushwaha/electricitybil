<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CustomerBill;
use App\Models\City_Bill_rate;
use App\Models\City;
use App\Models\Customer;

class CustomerBillController extends Controller
{
    //
    public function index(Request $request)
    {
        $result['customer_bill']=CustomerBill::paginate(5);
        $result['city_bill_rate']=City::paginate(5);
       
        // echo $result->customer->customer_name ;
       
        return view('admin.bill',$result);
    }
    public function manage_bill(Request $requst,$id='')
    {
        if($id>0){
            $result=CustomerBill::find($id);
            $userbill['id']=$id;
            $userbill['customer_id']=$result->customer_id;
            $userbill['total_unit']=$result->total_unit;
            $userbill['month_name']=$result->month_name;
            $userbill['city_name']=$result->customer->city->city_name;
            $userbill['city_id']=$result->customer->city->id;
           
        }
        else{
            $userbill['id']='';
            $userbill['customer_id']='';
            $userbill['total_unit']='';
            $userbill['month_name']='';
            $userbill['city_name']='';
            $userbill['city_id']='';
        }
        $customer=Customer::all();
        $userbill['customer']=$customer;
        return view('admin.manage_bill',$userbill);

    }
    public function save_customer_bill(Request $request)
    {
        # code...
        if($request->post('id')>0){
            $msg="Bill Updated Successfully";

            $model= CustomerBill::find($request->post('id'));
        }
        else
        {
            $model=new CustomerBill();
            $msg="Bill Generated Succesfully";
        }

        $request->validate([
            'customer_id'=>'Required',
            'total_unit'=>'required',
            'month'=>'required'
        ]);
        $unit=$request->post('total_unit');
        $remain_unit=$unit;
        $total_amount=0;
        $rateslabs=[];
        $city_id=$request->post('city_id');
        $city_rates=City_Bill_rate::where('city_id',$city_id)->orderBy('from')->get();
        $count=count($city_rates);
        $x=0;
        if($count==0){
          
            $city_rates=
           [
                
                [
                    'from'=>1,
                    'to'=>50,
                    'rates'=>5
                ],
                [
                    'from'=>51,
                    'to'=>100,
                    'rates'=>8
                ],
                [
                    'from'=>101,
                    'to'=>250,
                    'rates'=>12
                ],
                [
                    'from'=>251,
                    'to'=>NULL,
                    'rates'=>15
                ]

            ];
          
        }
            foreach($city_rates as $rate)
            {
                
                if($rate["to"]==null)
                {

                    if ($unit>=$rate['from'])
                    {
                        $total_amount=$total_amount+$remain_unit*$rate['rates'];

                    }
                }
                 else
                { 
                    if ($unit>=$rate['from']&&$unit<=$rate['to'])
                    {
                         if($remain_unit<=$rate['to'])
                         {
                            $total_amount=$total_amount+$remain_unit*$rate['rates'];
                         }
                         break;
                    }
                    else
                    {
                        $unit_count=($rate['to']+1)-$rate['from'];
                        $total_amount=$total_amount+$unit_count*$rate['rates'];
                        $remain_unit=$unit-$rate['to'];

                    }
                 }
            }
          
           
        
      
        $model->customer_id=$request->post('customer_id');
        $model->month_name=$request->post('month');
        $model->total_unit=$unit;
        $model->total_amount=$total_amount;
        $model->save();
        $request->session()->flash('success',$msg);
        return redirect('admins/customer-bill');

        
    }
    public function delete_bill (Request $request,$id)
    {
        # code...
        $model= CustomerBill::find($id);
        if($model!='')
       {
           $model->delete();
        $request->session()->flash('success','Recored Deleted Successfully');

       }
       else{
        $request->session()->flash('error','Recored  Not Found');

       }
               return redirect('admins/customer-bill');

    }
}
