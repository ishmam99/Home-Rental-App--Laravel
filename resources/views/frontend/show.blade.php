@extends('layouts.app')
@section('content')
  <section class="intro-single">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-lg-6">
          <div class="title-single-box">
            @if (Auth::user()->id==$rent->user_id)
                <h1 class="title-single"><a href="{{route('rents.edit',['id'=>$rent->id])}}">Update/Edit Details</a> </h1>
                <h1 class="title-single"><a href="{{route('rents.delete',['id'=>$rent->id])}}" class="text-danger">Delete</a> </h1>
               
                    
                @else
                    
               <h1 class="title-single">{{$rent->bedroom >2 ? 'Premium Flat ' : 'Regular Flat'}}</h1>
            @endif
            
            <span class="color-text-a">{{$rent->location}}</span>
          </div>
        </div>
        <div class="col-md-12 col-lg-6">
          <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
            <ol class="breadcrumb">
              <li class="breadcrumb-item">
                <a href="{{route('/')}}">Home</a>
              </li>
              <li class="breadcrumb-item">
                <a href="{{route('rents')}}">Properties</a>
              </li>
              <li class="breadcrumb-item active" aria-current="page">
               {{$rent->location}}
              </li>
            </ol>
             <?php $booked=DB::table('bookings')->where('user_id',Auth::user()->id)->where('rental_id',$rent->id)->first();?>
             
            @if (Auth::user()->role_id==3 && $booked==FALSE)
                
           
            <div class="card justify-content-center" style="background-color: rgb(57, 201, 57)">
              <h4 class="text-center" style="color:white; padding:5px;"><a href="{{route('booking.create',['id'=>$rent->id],)}}">
              Book Now </a>
            </h4>
            </div>
            
           @else
               <div class="card justify-content-center" style="background-color: rgb(226, 58, 28)">
              <h4 class="text-center" style="color:white; padding:5px;">
            Booked
            </h4>
            </div>
          
      
             @endif
          </nav>
        </div>
      </div>
    </div>
  </section>
     <section class="property-single nav-arrow-b">
    <div class="container">
      <div class="row">
        <div class="col-sm-10">
          <div id="property-single-carousel" class="owl-carousel owl-arrow gallery-property">
            <div class="carousel-item-b">
              <img src="{{asset($rent->image_one)}}" alt="">
            </div>
            <div class="carousel-item-b">
              <img src="{{asset($rent->image_two)}}" alt="">
            </div>
            <div class="carousel-item-b">
              <img src="{{asset($rent->image_three)}}" alt="">
            </div>
          </div>
          <div class="row justify-content-between">
            <div class="col-md-5 col-lg-4">
              <div class="property-price d-flex justify-content-center foo">
                <div class="card-header-c d-flex">
                  <div class="card-box-ico">
                    <span class="ion-money">$</span>
                  </div>
                  <div class="card-title-c align-self-center">
                    <h5 class="title-c">{{$rent->rent_fee}}</h5>
                  </div>
                </div>
              </div>
              <div class="property-summary">
                <div class="row">
                  <div class="col-sm-12">
                    <div class="title-box-d section-t4">
                      <h3 class="title-d">Quick Summary</h3>
                    </div>
                  </div>
                </div>
                <div class="summary-list">
                  <ul class="list">
                    <li class="d-flex justify-content-between">
                      <strong>Property ID:</strong>
                      <span>{{$rent->id+100}}</span>
                    </li>
                    <li class="d-flex justify-content-between">
                      <strong>Location:</strong>
                      <span>{{$rent->location}}</span>
                    </li>
                    <li class="d-flex justify-content-between">
                      <strong>Property Type:</strong>
                      <span>House</span>
                    </li>
                    <li class="d-flex justify-content-between">
                      <strong>Status:</strong>
                      <span>{{$rent->status?'Active': 'Booked'}}</span>
                    </li>
                    
                    <li class="d-flex justify-content-between">
                      <strong>Beds:</strong>
                      <span>{{$rent->bedroom}}</span>
                    </li>
                    <li class="d-flex justify-content-between">
                      <strong>Baths:</strong>
                      <span>{{$rent->toilet}}</span>
                    </li>
                    <li class="d-flex justify-content-between">
                      <strong>Balcony:</strong>
                      <span>{{$rent->balcony}}</span>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-md-7 col-lg-7 section-md-t3">
              <div class="row">
                <div class="col-sm-12">
                  <div class="title-box-d">
                    <h3 class="title-d">Property Description</h3>
                  </div>
                </div>
              </div>
              <div class="property-description">
                <p class="description color-text-a">
                 {{$rent->description}}
                </p>
                
              </div>
             
            </div>
          </div>
        </div>
        
      </div>
    </div>
  </section>
@endsection