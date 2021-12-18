@extends('layouts.app')
@section('content')
<section class="section-services section-t8">
   <div class="container"> <div class=" text-center mt-5 ">
        <h1>Add New House Rent Information</h1>
    </div>
    <div class="row ">
        <div class="col-lg-7 mx-auto">
            <div class="card mt-2 mx-auto p-4 bg-light">
                <div class="card-body bg-light">
                    <div class="container">
                        <form id="contact-form" action="{{route('store.rents')}}" accept-charset="utf-8" method="POST" role="form" enctype="multipart/form-data">
                            @csrf
                            <div class="controls">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group"> <label for="form_name">Location *</label> <input id="form_name" type="text" name="location" class="form-control" placeholder="Please enter House Location *" required="required" data-error="Firstname is required."> </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group"> <label for="rent_fee">Rent Fee *</label> <input id="rent_fee" type="text" name="rent_fee" class="form-control" placeholder="Please enter Desired Rent Fee *" required="required" data-error="Rent Fee is required."> </div>
                                    </div>
                                </div>
                                <div class="row">
                                   
                                    <div class="col-md-6">
                                        <div class="form-group"> <label for="form_bedrooms">Select Number Of Bedrooms *</label> <select id="bedroom" name="bedroom" class="form-control" required="required" data-error="Please specify Number Of Bedrooms.">
                                                <option value="" selected disabled>Bedrooms</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                 <option value="5">5</option>
                                                  <option value="6">6</option>
                                            </select> </div>
                                    </div>
                                </div>    
                                <div class="row">
                                   
                                    <div class="col-md-6">
                                        <div class="form-group"> <label for="form_need">Select Number Of Washroom *</label> <select id="form_need" name="toilet" class="form-control" required="required" data-error="Please specify The Number.">
                                                <option value="" selected disabled>Washroom</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                 <option value="5">5</option>
                                                  <option value="6">6</option>
                                            </select> </div>
                                    </div>
                                </div>             
                                <div class="row">
                                   
                                    <div class="col-md-6">
                                        <div class="form-group"> <label for="form_need">Select Number Of Balcony *</label> <select id="form_need" name="balcony" class="form-control" required="required" data-error="Please specify The Number.">
                                                <option value="" selected disabled>Balcony</option>
                                                 <option value="0">0</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                 <option value="5">5</option>
                                                  <option value="6">6</option>
                                            </select> </div>
                                    </div>
                                </div>                      
                                        <div class="row">
                                            <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label">Sample Images One: <span class="tx-danger">*</span></label>
                  <input type="file" id="file" class="form-control-file" name="image_one" onchange="readURL(this);">
                
                </div>
                
              </div> 
               
               <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label">Sample Images Two : <span class="tx-danger">*</span></label>
                 <input type="file" id="file" class="form-control-file" name="image_two" onchange="readURL2(this);">
                  
               
                </div> 
              </div>
               <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label">Sample Images Three : <span class="tx-danger">*</span></label>
                  <input type="file" id="file" class="form-control-file" name="image_three" onchange="readURL3(this);">
                
               
                </div> 
              </div>
                                        </div>
                                          <div class="row">
                                              <div class="col-lg-4">
                                                    <img src="#" id="one" alt="">
                                              </div>
                                              <div class="col-lg-4">
                                                    <img src="#" id="two" alt="">
                                              </div>
                                              <div class="col-lg-4">
                                                    <img src="#" id="three" alt="">
                                              </div>
                                          </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group"> <label for="form_message">Description *</label> <textarea id="form_message" name="description" class="form-control" placeholder="Write Some Details About the rent-house." rows="4" required="required" data-error="Please, leave us a message."></textarea> </div>
                                    </div>
                                    
                                </div>
                                <button class="btn btn-success btn-send pt-2 btn-block " type="submit">Save</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div> <!-- /.8 -->
        </div> <!-- /.row-->
    </div>
</div>
</section>
@endsection
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script>
      function readURL(input){
        if(input.files && input.files[0]){
          var reader = new FileReader();
          reader.onload= function(e){
            $('#one')
            .attr('src',e.target.result)
            .width(100)
            .height(140);
          };
          reader.readAsDataURL(input.files[0]);
        }
      }
    </script> 
    <script>
      function readURL2(input){
        if(input.files && input.files[0]){
          var reader = new FileReader();
          reader.onload= function(e){
            $('#two')
            .attr('src',e.target.result)
            .width(100)
            .height(140);
          };
          reader.readAsDataURL(input.files[0]);
        }
      }
    </script>
     <script>
      function readURL3(input){
        if(input.files && input.files[0]){
          var reader = new FileReader();
          reader.onload= function(e){
            $('#three')
            .attr('src',e.target.result)
            .width(100)
            .height(140);
          };
          reader.readAsDataURL(input.files[0]);
        }
      }
    </script>