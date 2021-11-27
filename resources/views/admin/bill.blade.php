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

         <a href="#" data-toggle="modal" id="addnewbill" data-target="#exampleModal" urldata="{{url('admins/customer-bills/new-bill')}}"class="btn btn-primary  ml-0 mr-auto">Create New Bill</a>

         </div>
         
        </div>
        <!-- /.card-header -->
        <div class="card-body table-responsive p-0" >
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
                          <a href="#" data-toggle="modal"  data-target="#exampleModal" urldata="{{url('admins/customer-bill/edit-bill')}}/{{$bill->id}}"  class="btn btn-success editbill"><i class="fas fa-edit"> Edit</i></a>
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
    $('#addnewbill').click(function(){
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