@extends('layouts.app')
@section('content')
 <section class="intro-single">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-lg-8">
          <div class="title-single-box">
            <h1 class="title-single">Our Amazing Properties</h1>
            <span class="color-text-a">Grid Properties</span>
          </div>
        </div>
        <div class="col-md-12 col-lg-4">
          <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
            <ol class="breadcrumb">
              <li class="breadcrumb-item">
                <a href="#">Home</a>
              </li>
              <li class="breadcrumb-item active" aria-current="page">
                Properties Grid
              </li>
            </ol>
          </nav>
        </div>
      </div>
    </div>
  </section>
    <section class="property-grid grid">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="grid-option">
            <form>
              <select class="custom-select">
                <option selected>All</option>
                <option value="1">New to Old</option>
                <option value="2">For Rent</option>
                <option value="3">For Sale</option>
              </select>
            </form>
          </div>
        </div>
        @foreach ($rents as $item)
            
       
        <div class="col-md-4">
          <div class="card-box-a card-shadow">
            <div class="img-box-a">
             
              <img src="{{asset($item->image_one)}}" alt="" class="img-a img-fluid">
            </div>
            <div class="card-overlay">
              <div class="card-overlay-a-content">
                <div class="card-header-a">
                  <h2 class="card-title-a">
                    {{$item->location}}
                  </h2>
                </div>
                <div class="card-body-a">
                  <div class="price-box d-flex">
                    <span class="price-a">rent | $ {{$item->rent_fee }}</span>
                  </div>
                  <a href="{{route('rents.show',['id'=>$item->id])}}" class="link-a">Click here to view
                    <span class="ion-ios-arrow-forward"></span>
                  </a>
                </div>
                <div class="card-footer-a">
                  <ul class="card-info d-flex justify-content-around">
                    <li>
                      <h4 class="card-info-title">Details</h4>
                      <span>
                        {{$item->description}}
                      </span>
                    </li>
                    <li>
                      <h4 class="card-info-title">Beds</h4>
                      <span>{{$item->bedroom}}</span>
                    </li>
                    <li>
                      <h4 class="card-info-title">Baths</h4>
                      <span>{{$item->toilet}}</span>
                    </li>
                    <li>
                      <h4 class="card-info-title">Balcony</h4>
                      <span>{{$item->balcony}}</span>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
       
        @endforeach
      </div>
      <div class="row">
        <div class="col-sm-12">
          <nav class="pagination-a">
            <ul class="pagination justify-content-end">
             
              <li class="page-item">
                {{$rents->links()}}
              </li>
             
            </ul>
          </nav>
        </div>
      </div>
    </div>
  </section>
@endsection