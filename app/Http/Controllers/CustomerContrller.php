<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;

class CustomerContrller extends Controller
{
    //
    public function index(Request $request)
    {
        # code...
        $data['customers']=Customer::paginate(5);
        return view('admin.customers',$data);
    }
    public function manage_customer(Request $request,$id='')
    {
        # code...
        if($id>0){
            $cusArr=Customer::where(['id'=>$id])->get();
            $data['id']=$cusArr['0']->id;
            $data['customer_name']=$cusArr['0']->customer_name;
            $data['customer_email']=$cusArr[0]->customer_email;
            $data['customer_mobno']=$cusArr[0]->customer_mobno;
            $data['customer_city']=$cusArr[0]->customer_city;
        }
        else{
            $data['id']='';
            $data['customer_name']='';
            $data['customer_email']='';
            $data['customer_mobno']='';
            $data['customer_city']='';
    
        }
       
        return view('admin.manage_customer',$data);
    }
    public function save_customer_data(Request $request)
    {
        # code...
        
        if($request->post('id')>0){
            $email_validate='required';
           
            $model=Customer::find($request->post('id'));
            $msg="Customer Record Updated Succesfully";
        }
        else{
            $email_validate='required|unique:customers,customer_email,'.$request->post('email');

            $model=new Customer();
            $msg="Record Inserted Success Fully";

        }
        $request->validate([
            'name'=>'required',
            'email'=>$email_validate,
            'mobno'=>'required',
            'city'=>'required'
        ]);
        $model->customer_name=$request->post('name');
        $model->customer_email=$request->post('email');
        $model->customer_mobno=$request->post('mobno');
        $model->customer_city=$request->post('city');
        $model->save();
        $request->session()->flash('succes',$msg);
        return redirect('/admins/customers');
    }
    public function delete_customer(Request $request,$id)
    {
        # code...
        $customer_model=Customer::find($id);
        if(!empty($customer_model)){
            $customer_model->delete();
            $request->session()->flash('succes','Customer Data Deleted');
            return redirect('/admins/customers');
        }

    }
   
}
