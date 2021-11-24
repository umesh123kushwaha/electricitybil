<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\Customer;
use App\Models\User;
use App\Models\CustomerBill;


class AdminController extends Controller
{
    //

    public function index()
    {
        # code...
        
        $result['cuscount']=Customer::count();
        $result['billcount']=CustomerBill::count();
       
        return view('admin.index',$result);
    }
    public function users() 
    {
        # code...
        return view('admin.index');
    }
    public function validateLogin(Request $request)
    {
        # code...
        $request->validate([
            'user_id'=>'required',
            'password'=>'required'
        ]);
        $user=$request->post('user_id');
        $password=$request->post('password');
        // return Hash::make($password);
       
        $result=User::where(['email'=>$user])->first();
        if($result)
        {
            if(Hash::check($password,$result->password))
            {
                $request->session()->put('Admin_login',true);
                $request->session()->put('ADMIN_ID',$result);
                return redirect('/admins');
            }
            else
            {
                $request->session()->flash('error','Please Enter Correct Password');
                return redirect('/');
            }

        }
        else
        {
            $request->session()->flash('error','Please Enter Correct Correct');
            return redirect('/');
            
        }
    }
   
}
