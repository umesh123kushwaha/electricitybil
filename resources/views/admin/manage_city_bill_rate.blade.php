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
                    <label >City Name:</label>
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
                <div class="row">
                  <div class="col-4">
                      <div class="form-group">
                        <label >From Unit</label>
                        <input type="number" name="from_unit" class="form-control @error('from_unit')is-invalid @enderror " id="from_unit" placeholder="Enter Begining Unit">
                        @error('from_unit')
                          <p class="invalid-feedback">{{$message}}</p>
                          @enderror
                      </div>
                  </div>
                
                  <div class="col-4">
                    <div class="form-group">
                    <label >&nbsp;&nbsp; <br></label>
                      <div class="form-check">
                        
                      <label class="form-check-label">
                        <input name="checkbtn" id="checkbtn" class="form-check-input" type="checkbox">
                        this is Max Unit</label>
                      </div>
                    </div>

                  </div>
                  <div class="col-4">
                    <div class="form-group">
                      <label >Till Unit</label>
                      <input type="number" name="to_unit" class="form-control @error('from_unit')is-invalid @enderror " id="till_unit" placeholder="Enter till Unit" >
                      @error('from_unit')
                        <p class="invalid-feedback">{{$message}}</p>
                        @enderror
                    </div>
                    
                  </div>
                </div>
                <a href="#" id="add_new_row" class="btn btn-primary">Insert New Row</a>
                <div class="col-12">
                 
                   
                  </div>
               
               
               
               
               @section('btn')
                <div class="form-group">
                  <input type="button" value="submit" name="submit" id="submit" class="btn btn-success">
                  <a href="#" data-dismiss="modal" class="btn btn-secondary">close</a>
                </div>
                @endsection


            </form>
            <script>
              $(document).ready(function(){
                
                $(document).on('change','#checkbtn',function(event){
                  if($(this).prop('checked')==true)
                    $('#till_unit').prop('disabled',true)
                  else
                  {
                    $('#till_unit').prop('disabled',false)
                  }
                  event.preventDefault();
                })
                $('#add_new_row').click(function(){
                  var rowhtml=`  <div class="row">
                  <div class="col-4">
                      <div class="form-group">
                        <label >From Unit</label>
                        <input type="number" name="from_unit" class="form-control @error('from_unit')is-invalid @enderror " id="from_unit" placeholder="Enter Begining Unit">
                        @error('from_unit')
                          <p class="invalid-feedback">{{$message}}</p>
                          @enderror
                      </div>
                  </div>
                
                  <div class="col-4">
                    <div class="form-group">
                    <label >&nbsp;&nbsp; <br></label>
                      <div class="form-check">
                        
                      <label class="form-check-label">
                        <input name="checkbtn" id="checkbtn" class="form-check-input" type="checkbox">
                        this is Max Unit</label>
                      </div>
                    </div>

                  </div>
                  <div class="col-4">
                    <div class="form-group">
                      <label >Till Unit</label>
                      <input type="number" name="to_unit" class="form-control @error('from_unit')is-invalid @enderror " id="till_unit" placeholder="Enter till Unit" >
                      @error('from_unit')
                        <p class="invalid-feedback">{{$message}}</p>
                        @enderror
                    </div>
                    
                  </div>
                </div>`;
                $(this).before(rowhtml);
                })
              })
              
            </script>
           
            @endsection
          
      