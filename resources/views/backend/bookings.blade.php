  
  @extends('backend.layouts')
     @section('content')
      <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2>Bookings</h2>   
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
                             Bookings Table
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>  
                                            <th>Client Name</th>
                                            <th>Client Phone</th>
                                            <th>Renter Name</th>
                                            <th>Renter Phone</th>
                                          
                                           
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($bookings as $item)
                                            
                                        
                                        <tr class="odd gradeX">
                                            <td>{{$item->name}}</td>
                                            <td>{{$item->phone}}</td>
                                           <?php $client=DB::table('users')->where('id',$item->user_id)->first(); ?>
                                            <td >{{$client->name}}</td>
                                             <td>{{$item->rental_phone}}</td>
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