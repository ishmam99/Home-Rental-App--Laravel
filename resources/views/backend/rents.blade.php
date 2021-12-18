
  @extends('backend.layouts')
     @section('content')
      <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2>Rents</h2>   
                        <h5>Welcome Admin, Love to see you back. </h5>
                       
                    </div>
                </div>
                 <!-- /. ROW  -->
                 <hr />
               
            <div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             Rents Table
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>  
                                            <th>Renter Name</th>
                                            <th>Location</th>
                                            <th>Rent Fee</th>
                                            <th>Renter Phone</th>
                                            <th>Bedrooms</th>
                                             <th>Baths</th>
                                             <th>Balcony</th>
                                             <th>Status</th>
                                           
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($rents as $item)
                                            
                                        
                                        <tr class="odd gradeX">
                                            <td>{{$item->name}}</td>
                                            <td>{{$item->location}}</td>
                                         
                                            <td >{{$item->rent_fee}}</td>
                                             <td>{{$item->phone}}</td>
                                             <td>{{$item->bedroom}}</td>
                                             <td>{{$item->toilet}}</td>
                                             <td>{{$item->balcony}}</td>
                                             <td >@if ($item->status==TRUE)
                                                <button class="btn btn-primary">Active </button> 
                                             @else
                                                 <button class="btn btn-warning">Booked </button> 
                                             @endif</td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            
                        </div>
                    </div>
                    <!--End Advanced Tables -->
                </div>
            </div>
 
@endsection