@extends('admin/layout/model')
@if($id)
@section('model-title','Edit Customer Details')
@else
@section('model-title','Add New Customer')
@endif

@section('model-content')
            <form action="{{route('customer.save_customer_data')}}" id="model-form" method="post">
              @csrf
                <div class="form-group">
                    <label >Customer Name:</label>
                    <input type="text" name="name" id="name" class="form-control @error('name')is-invalid @enderror" placeholder="Enter Customer  Name"value="{{old('name',$customer_name)}}">
                    @error('name')
                         <p class="invalid-feedback"> {{$message}}</p>
                    @enderror
                </div>
                <div class="form-group">
                    <label >Customer Email:</label>
                    <input type="email" name="email" id="email" class="form-control @error('email')is-invalid @enderror" placeholder="Enter Customer email" value="{{old('email',$customer_email)}}">
                    @error('email')
                         <p class="invalid-feedback"> {{$message}}</p>
                    @enderror
                </div>
                
                <div class="form-group">
                    <label >Customer Mobile No:</label>
                    <input type="number" name="mobno"  id="mobno" class="form-control @error('mobno')is-invalid @enderror" placeholder="Enter Customer Mobile No" value="{{old('mobno',$customer_mobno)}}">
                    @error('mobno')
                         <p class="invalid-feedback"> {{$message}}</p>
                    @enderror
                </div>
                <div class="form-group">
                    <label >Customer City:</label>
                    <input type="text" name="city" id="city" class="form-control @error('city')is-invalid @enderror" placeholder="Enter Customer City"value="{{old('city',$customer_city)}}">
                    @error('city')
                         <p class="invalid-feedback"> {{$message}}</p>
                    @enderror
                </div>
                <input type="hidden" name="id" value="{{$id}}">
               


            </form>
            @section('btn')
                <div class="form-group">
                  <input type="button" value="submit" name="submit" id="submit" class="btn btn-success">
                  <a href="#" data-dismiss="modal" class="btn btn-secondary">close</a>
                </div>
              @endsection
      


@endsection