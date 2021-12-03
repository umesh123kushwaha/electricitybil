@extends('admin/layout/layout')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Bill Management</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Bill Management</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      @if(session('success'))
        <div class="alert alert-success alert-dismissible">
        <button class="close" data-dismiss="alert" area-hidden="true">X</button>
          {{session('success')}}
        </div>
      @endif
      @if(session('error'))
        <div class="alert alert-danger">
        <button class="close" data-dismiss="alert" area-hidden="true">X</button>
          {{session('error')}}
        </div>
      @endif
      <div class="card card-success">
         
        <div class="card-header">
        <h3 class="card-title">Customers Bill Table</h3>
          <div class="card-tools">
             
              <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                <i class="fas fa-minus"></i>
              </button><button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                <i class="fas fa-times"></i>
              </button>
          </div>
         
        </div>
        <!-- /.card-header -->
            <div class="card-body table-responsive p-0" >
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

                  <a href="#" data-toggle="modal" id="addnewbill" data-target="#exampleModal" urldata="{{url('admins/customer-bills/new-bill')}}"class="btn btn-primary manage-content ml-0 mr-auto">Create New Bill</a>

              </div>
              </div>
              <div class="card-body">
                <table class="table table-head-fixed text-nowrap text-center table-bordered">
                    <thead class="  "  >
                    <tr class=" "style="" >
                        <th>ID</th>
                        <th>Customer Name</th>
                        <th>Cunsume Unit</th>
                        <th>Total Amount</th>
                        <th>Month</th>
                        
                      
                        
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                      @foreach($customer_bill as $bill)
                        @if($bill->customer=='')
                        @continue;
                        @endif
                          <tr>
                            <td>{{$bill->id}}</td>
                            <td>{{$bill->customer->customer_name}}</td>
                            <td>{{$bill->total_unit}}</td>
                            <td>{{$bill->total_amount}}</td>
                            <td>{{$bill->month_name}}</td>
                            <td> 
                              <a href="#" data-toggle="modal"  data-target="#exampleModal" urldata="{{url('admins/customer-bill/edit-bill')}}/{{$bill->id}}"  class="btn btn-success manage-content editbill"><i class="fas fa-edit"> Edit</i></a>
                              <a href="{{url('admins/customer-bills/delete-bill')}}/{{$bill->id}}" class="btn btn-danger"><i class="fas fa-trash"> Delete</i></a>
                            </td>

                          </tr>
                      @endforeach
                    </tbody>
                </table>
                <div class=" ml-auto p-2">
                {{$customer_bill->links()}}

                </div>
              </div>
            </div>

        <!-- /.card-body -->
      </div>
      <!-- /.card -->
      <div class="card card-info">
         
        <div class="card-header">
        <h3 class="card-title">City Bill rate</h3>
          <div class="card-tools">
             
              <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                <i class="fas fa-minus"></i>
              </button><button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                <i class="fas fa-times"></i>
              </button>
          </div>
         
        </div>
        <!-- /.card-header -->
            <div class="card-body table-responsive p-0" >
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

                  <a href="#" data-toggle="modal"  data-target="#exampleModal" urldata="{{url('admins/customer-bills/new-city-bill-rate')}}"class="btn btn-primary manage-content  ml-0 mr-auto">Add new Bill rate in City</a>

              </div>
              </div>
              <div class="card-body">
                <table class="table table-head-fixed text-nowrap text-center table-bordered">
                    <thead class="  "  >
                    <tr class=" "style="" >
                        <th>ID</th>
                        <th>City Name Name</th>
                        <th>Rate Slabs</th>
                       
                        
                      
                        
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                      @foreach($city_bill_rate as $rate)
                       
                      @if(count($rate->city_bill_rate)>0)
                        
                       
                      
                      
                       
                          <tr>
                            <td>{{$rate->id}}</td>
                            <td>{{$rate->city_name}}</td>
                            <td class="text-left">
                              @foreach($rate->city_bill_rate as $list)
                                    @if($list->to!=null)
                                    {{$list->from}} - {{ $list->to}} Units : {{$list->rates}} rs/unit<br>
                                    @else
                                    {{$list->from}} - Unlimited : {{$list->rates}} rs/unit<br>
                                    @endif
                              @endforeach
                            </td>
                           
                            <td> 
                              <a href="#" data-toggle="modal"  data-target="#exampleModal" urldata="{{url('admins/customer-bills/edit-city-bill-rate')}}/{{$rate->id}}"  class="btn btn-success editbill"><i class="fas fa-edit"> Edit</i></a>
                              <a href="{{url('admins/customer-bills/delete-city-bill-rate')}}/{{$rate->id}}" class="btn btn-danger"><i class="fas fa-trash"> Delete</i></a>
                            </td>

                          </tr>
                          @endif
                      @endforeach
                    </tbody>
                </table>
                <div class=" ml-auto p-2">
               

                </div>
              </div>
            </div>

        <!-- /.card-body -->
      </div>
      <!-- /.card -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->


@endsection
@section('script')
<script>
  $(document).ready(function(){
    $('.manage-content').click(function(){
      $('.modal-content').html(" ");
      x=$(this).attr('urldata')
      $.ajax({
        url:x,
        success:function(data){
          $('.modal-content').html(data);
        }
      })
    
    });
    $('.editbill').click(function(){
      x=$(this).attr('urldata')
     
      $.ajax({
        url:x,
        success:function(data){
          $('.modal-content').html(data);
        }
      })
    
    });
    $(document).on('change','#customer_id',function(){
       var  city_id=$('option:selected', this).attr('city_id');
       var  city_name=$('option:selected', this).attr('city_name');
      
       $('#city_name').text("City: "+city_name);
       $('#city_id').val(city_id);
    })
    $(document).on('click','#submit',function(){
     
         
        var form = $('#model-form');
       
        var url = form.attr('action');
       $('#model-form .is-invalid').removeClass('is-invalid');
        $('#model-form .invalid-feedback').remove();

        $.ajax({
              type: "POST",
              url: url,
              data: form.serialize(), // serializes the form's elements.
              success: function(data)
              {
                 $('#exampleModal').fadeOut();
                 window.location.href="{{url('admins/customer-bill')}}"
              },
              error: function(data)
              {
                var errors=data.responseJSON.errors
                
                for( var x in errors){
                  
                  $('#'+x).addClass('is-invalid');
                  sp="<span class='invalid-feedback'>"+errors[x]+"</span>"
                  $('#'+x).after(sp);
                }
              }
            });


        });
        
      
   
  })
  

 
</script>
@endsection