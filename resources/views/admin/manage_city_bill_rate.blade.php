@extends('admin/layout/model')
@if($city_id)
@section('model-title','Edit City Bill Rate')
@else
@section('model-title','Add New City Bill rate')
@endif

@section('model-content')
            <form action="{{route('city_bill_rate.save_city_bill_rate')}}" method="post" id="model-form">
              @csrf
                <div class="form-group">
                    <label >Customer Name:</label>
                    <select name="city_id" class="form-control @error('city_id')is-invalid @enderror" id="city_id">
                      <option value="">--Select City--</option>
                       @foreach($cities as $list)
                            
                             <option  value="{{$list->id}}">{{$list->city_name}}</option>
                           
                       @endforeach
                    </select>
                    @error('city_id')
                    <p class="invalid-feedback">{{$message}}</p>
                    @enderror

                </div>
               
               
               @section('btn')
                <div class="form-group">
                  <input type="button" value="submit" name="submit" id="submit" class="btn btn-success">
                  <a href="#" data-dismiss="modal" class="btn btn-secondary">close</a>
                </div>
                @endsection


            </form>
           
            @endsection
          
      