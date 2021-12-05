<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CustomerContrller;
use App\Http\Controllers\CustomerBillController;
use App\Http\Controllers\CityBillRateController;
use Illuminate\Support\Facades\Mail;
use App\Mail\TestMail;
use App\Mail\MarkdownMail;
use App\Jobs\TestMailJob;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('login');
});
Route::get('/mail',function(){
    
    Mail::to("umesh@gmail.com")->send(new MarkdownMail());
    echo "Mail Sent .";

});
Route::get('/queue',function(){
    dispatch(new TestMailJob())->delay(now()->addSeconds(5));
    echo "Mail Sent .";
            

});

Route::post('/admins/validateLogin',[AdminController::Class,'validateLogin'])->name('admins.validateLogin');
Route::group(['middleware'=>'user_auth'],function(){
    Route::get('/admins',[AdminController::Class,'index']);
    Route::get('/admins/customers',[CustomerContrller::Class,'index']);
    Route::get('/admins/customers/manage_customer',[CustomerContrller::Class,'manage_customer']);
    Route::get('/admins/customers/manage_customer/{id}',[CustomerContrller::Class,'manage_customer']);
    Route::get('/admins/customers/delete_customer/{id}',[CustomerContrller::Class,'delete_customer']);
    Route::post('/admins/customers/manage_customer/save_customer_data',[CustomerContrller::class,'save_customer_data'])->name('customer.save_customer_data');
    Route::post('/admins/customer-bill/save_customer_bill',[CustomerBillController::class,'save_customer_bill'])->name('customer_bill.save_customer_bill');
    Route::get('/admins/customer-bill',[CustomerBillController::class,'index']);
    Route::get('admins/customer-bills/new-bill',[CustomerBillController::class,'manage_bill']);
    Route::get('admins/customer-bills/new-city-bill-rate',[CityBillRateController::class,'manage_city_bill_rate']);
    Route::get('admins/customer-bills/edit-city-bill-rate/{city_id}',[CityBillRateController::class,'manage_city_bill_rate']);
    Route::post('admins/customer-bills/save_city_bill_rate',[CityBillRateController::class,'save_city_bill_rate'])->name('city_bill_rate.save_city_bill_rate');
    Route::get('admins/customer-bill/edit-bill/{id}',[CustomerBillController::class,'manage_bill']);
    Route:: get('admins/customer-bills/delete-bill/{id}',[CustomerBillController::class,'delete_bill']);


});
Route::get('admins/logout',function(){
    session()->forget('Admin_login');
    session()->forget('ADMIN_ID');
    session()->flash('error',"Logout Successfully");
    return redirect('/');
});
