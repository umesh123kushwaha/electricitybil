
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">@yield('model-title')</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" id="content">
        @yield('model-content')
        
       
   
       
     
    </div>
   
   
      
      <div class="modal-footer">
        @yield('btn')
        <!-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" id="model-submit-btn" class="btn btn-primary">Send message</button> -->
      </div>
    