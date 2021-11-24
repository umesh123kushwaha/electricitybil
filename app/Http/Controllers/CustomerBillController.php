<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CustomerBill;
use App\Models\Customer;

class CustomerBillController extends Controller
{
    //
    public function index(Request $request)
    {
        $result['customer_bill']=CustomerBill::paginate(5);
       
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
        }
        else{
            $userbill['id']='';
            $userbill['customer_id']='';
            $userbill['total_unit']='';
            $userbill['month_name']='';
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

            $model= CustomerBill::find($id);
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
        $total_amount=0;
        for($i=1;$i<=$unit;$i++)
        {
            if($i<=50)
             $total_amount=$total_amount+5;
            else if($i>50&&$i<=100)
            {
                $total_amount=$total_amount+8;
            }
            
            else if($i>100&&$i<=250)
            {
                $total_amount=$total_amount+12;
            }
            else
            {
                $total_amount=$total_amount+15;
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
