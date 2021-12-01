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
    <div class="row">
            <div class="col-lg-3 m-lg-auto">
              <div class="small-box bg-warning">
                <div class="inner">
                  <h3>{{$cuscount}}</h3>

                  <p>Customer Registrations</p>
                </div>
                <div class="icon">
                  <i class="fas fa-user-plus"></i>
                </div>
                <a href="{{url('admins/customers')}}" class="small-box-footer">
                  More info <i class="fas fa-arrow-circle-right"></i>
                </a>
              </div>
            </div>
            <div class="col-lg-3 m-lg-auto ">
              <div class="small-box bg-success">
                <div class="inner">
                  <h3>{{$billcount}}</h3>

                  <p>Bill Generated</p>
                </div>
                <div class="icon">
                  <i class="fas fa-edit"></i>
                </div>
                <a href="{{url('admins/customer-bill')}}" class="small-box-footer">
                  More info <i class="fas fa-arrow-circle-right"></i>
                </a>
              </div>
            </div>
      
      </div>
     


    </section>
       <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->


@endsection
@section('script')
<script>
 $(document).ready(function() {
    $("#model-submit-btn").click(function() {
        // var x = JSON.stringify($("#model-form").serializeArray());
        var x = $("#model-form").serializeArray();
        var obj={}
        $.each(x, function(i, field) {
          if(i==0){
            obj=obj+field.name + ":"
                    + field.value;
          }
          else{
            obj=obj+","+field.name + ":"
                    + field.value;
          }
          
                    
        });
        alert(JSON.stringify(x))
    });
   
});
</script>

@endsection