@extends('admin/layout/model')
@if($id)
@section('model-title','Edit Bill')
@else
@section('model-title','Add New Bill')
@endif

@section('model-content')
            <form action="{{route('customer_bill.save_customer_bill')}}" method="post" id="model-form">
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
                    <input type="number" name="total_unit" id="total_unit" class="form-control @error('total_unit')is-invalid @enderror" placeholder="Enter Consumed Unit" value="{{old('total_unit',$total_unit)}}">
                    @error('total_unit')
                         <p class="invalid-feedback"> {{$message}}</p>
                    @enderror
                </div>
                
               
                <div class="form-group">
                    <label >Month Name:</label>
                    <input type="text" name="month" id="month" class="form-control @error('month')is-invalid @enderror" placeholder="Enter Month Name"value="{{old('month',$month_name)}}">
                    @error('month')
                         <p class="invalid-feedback"> {{$message}}</p>
                    @enderror
                </div>
                <input type="hidden" name="id" value="{{$id}}">
               @section('btn')
                <div class="form-group">
                  <input type="button" value="submit" name="submit" id="submit" class="btn btn-success">
                  <a href="#" data-dismiss="modal" class="btn btn-secondary">close</a>
                </div>
                @endsection


            </form>
            @endsection
      