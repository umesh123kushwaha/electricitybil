@extends('admin/layout/layout')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Dashboard</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="card card-primary">
        <div class="card-header">
       
         Add New Customer
         
        </div>
        <!-- /.card-header -->
        <div class="card-body ">
            <form action="{{route('customer.save_customer_data')}}" method="post">
              @csrf
                <div class="form-group">
                    <label >Customer Name:</label>
                    <input type="text" name="name" class="form-control @error('name')is-invalid @enderror" placeholder="Enter Customer  Name"value="{{old('name',$customer_name)}}">
                    @error('name')
                         <p class="invalid-feedback"> {{$message}}</p>
                    @enderror
                </div>
                <div class="form-group">
                    <label >Customer Email:</label>
                    <input type="email" name="email" class="form-control @error('email')is-invalid @enderror" placeholder="Enter Customer email" value="{{old('email',$customer_email)}}">
                    @error('email')
                         <p class="invalid-feedback"> {{$message}}</p>
                    @enderror
                </div>
                
                <div class="form-group">
                    <label >Customer Mobile No:</label>
                    <input type="number" name="mobno" class="form-control @error('mobno')is-invalid @enderror" placeholder="Enter Customer Mobile No" value="{{old('mobno',$customer_mobno)}}">
                    @error('mobno')
                         <p class="invalid-feedback"> {{$message}}</p>
                    @enderror
                </div>
                <div class="form-group">
                    <label >Customer City:</label>
                    <input type="text" name="city" class="form-control @error('city')is-invalid @enderror" placeholder="Enter Customer City"value="{{old('city',$customer_city)}}">
                    @error('city')
                         <p class="invalid-feedback"> {{$message}}</p>
                    @enderror
                </div>
                <input type="hidden" name="id" value="{{$id}}">
                <div class="form-group">
                  <input type="submit" name="submit" id="submit" class="btn btn-success">
                  <a href="{{url('admins/customers')}}" class="btn btn-secondary">Back</a>
                </div>


            </form>
           
        </div>

        <!-- /.card-body -->
      </div>
      <!-- /.card -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->


@endsection