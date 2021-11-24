@extends('admin/layout/layout')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Manage customer Bill</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">manage bill</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="card card-primary">
        <div class="card-header">
       
         Create New Bill
         
        </div>
        <!-- /.card-header -->
        <div class="card-body ">
            <form action="{{route('customer_bill.save_customer_bill')}}" method="post">
              @csrf
                <div class="form-group">
                    <label >Customer Name:</label>
                    <select name="customer_id" class="form-control @error('customer_id')is-invalid @enderror" id="customer_id">
                      <option value="">--Select Customer--</option>
                       @foreach($customer as $list)
                            @if($list->id==$customer_id)
                              <option value="{{$list->id}}" selected>{{$list->customer_name}}</option>
                            @else
                             <option value="{{$list->id}}">{{$list->customer_name}}</option>
                             @endif

                       @endforeach
                    </select>
                    @error('customer_id')
                    <p class="invalid-feedback">{{$message}}</p>
                    @enderror

                </div>
                <div class="form-group">
                    <label >Total consumed Unit :</label>
                    <input type="number" name="total_unit" class="form-control @error('total_unit')is-invalid @enderror" placeholder="Enter Consumed Unit" value="{{old('total_unit',$total_unit)}}">
                    @error('total_unit')
                         <p class="invalid-feedback"> {{$message}}</p>
                    @enderror
                </div>
                
               
                <div class="form-group">
                    <label >Month Name:</label>
                    <input type="text" name="month" class="form-control @error('month')is-invalid @enderror" placeholder="Enter Month Name"value="{{old('month',$month_name)}}">
                    @error('month')
                         <p class="invalid-feedback"> {{$message}}</p>
                    @enderror
                </div>
                <input type="hidden" name="id" value="{{$id}}">
                <div class="form-group">
                  <input type="submit" name="submit" id="submit" class="btn btn-success">
                  <a href="{{url('admins/customer-bill')}}" class="btn btn-secondary">Back</a>
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