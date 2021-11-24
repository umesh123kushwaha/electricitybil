@extends('admin/layout/layout')
@section('Page_title','Admin||Customer Menagement')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Customers</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Customers</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="card">
        <div class="card-header">   
        <div class="card-tools float-left ">
            <div class="input-group input-group-sm " style="width: 200px;">
            <input type="text" name="table_search" class="form-control " placeholder="Search">

            <div class="input-group-append">
                <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
            </div>
            </div>
        </div>
         <div class="card-tools">

         <a href="{{url('admins/customers/manage_customer/')}}"class="btn btn-primary  ml-0 mr-auto">Add New Customer</a>

         </div>
         
        </div>
        <!-- /.card-header -->
        <div class="card-body table-responsive p-0" style="">
            <table class="table table-head-fixed text-nowrap text-center">
                <thead class="  "  >
                <tr class=" "style="" >
                    <th>ID</th>
                    <th>Customer Name</th>
                    
                    <th>Email</th>
                   
                    <th>city</th>
                    <th>Mob No</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                    @foreach($customers as $customer)
                    <tr>
                            <td>{{$customer->id}}</td>
                            <td>{{$customer->customer_name}}</td>
                            <td>{{$customer->customer_email}}</td>
                            <td>{{$customer->customer_city}}</td>
                            <td>{{$customer->customer_mobno}}</td>
                            <td>
                                <a href="{{url('admins/customers/manage_customer')}}/{{$customer->id}}" class="btn btn-primary"> <i class="fas fa-edit"></i> Edit</a>
                                <a href="{{url('admins/customers/delete_customer/')}}/{{$customer->id}}" class="btn btn-danger"> <i class="fas fa-trash"></i> delete</a>
                        </td>
                    </tr>   
                    @endforeach
               
                </tbody>
            </table>
            
           

          
            </div>
            <div class=" ml-auto p-2">
            {{$customers->links()}}

            </div>


        <!-- /.card-body -->
      </div>
      <!-- /.card -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->


@endsection