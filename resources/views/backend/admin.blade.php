
    @extends('backend.layouts')
    @section('content')
        
    
    <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2>Admin Dashboard</h2>   
                        <h5>Welcome Admin , Love to see you back. </h5>
                    </div>
                </div>              
                 <!-- /. ROW  -->
                  <hr />
                <div class="row">
                <div class="col-md-3 col-sm-6 col-xs-6">           
			<div class="panel panel-back noti-box">
                <span class="icon-box bg-color-red set-icon">
                    <i class="fa fa-user"></i>
                </span>
                <div class="text-box" >
                    <p class="main-text">{{$user}} Users</p>
                   
                </div>
             </div>
                </div>
             <div class="col-md-3 col-sm-6 col-xs-6">      
             <div class="panel panel-back noti-box">
                <span class="icon-box bg-color-blue set-icon">
                    <i class="fa fa-user"></i>
                </span>
                <div class="text-box" >
                    <p class="main-text">{{$renter}} Landlord</p>
                    
                </div>
             </div>
             </div>
             <div class="col-md-3 col-sm-6 col-xs-6">      
             <div class="panel panel-back noti-box">
                <span class="icon-box bg-color-blue set-icon">
                    <i class="fa fa-user"></i>
                </span>
                <div class="text-box" >
                    <p class="main-text">{{$client}} Clients</p>
                    
                </div>
             </div>
             </div>
		    
                    <div class="col-md-3 col-sm-6 col-xs-6">           
			<div class="panel panel-back noti-box">
                <span class="icon-box bg-color-green set-icon">
                    <i class="fa fa-home"></i>
                </span>
                <div class="text-box" >
                    <p class="main-text">{{$rents}} Rents</p>
                  
                </div>
             </div>
		     </div>
                    <div class="col-md-3 col-sm-6 col-xs-6">           
			<div class="panel panel-back noti-box">
                <span class="icon-box bg-color-blue set-icon">
                    <i class="fa fa-bell-o"></i>
                </span>
                <div class="text-box" >
                    <p class="main-text">{{$bookings}} Bookings</p>
                   
                </div>
             </div>
		     </div>
                    <div class="col-md-3 col-sm-6 col-xs-6">           
			
		     </div>
			</div>
                 <!-- /. ROW  -->
                <hr />                
               
                 <!-- /. ROW  -->
                
                 <!-- /. ROW  -->
                <div class="row" >
                   
                    <div class="col-md-9 col-sm-12 col-xs-12">
               
                    <div class="panel panel-default">
                        <div class="panel-heading">
                           Users List
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>User Name</th>
                                            <th>User Type</th>
                                            <th>Phone</th>
                                           
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($users as $key=>$item)
                                            
                                        
                                        <tr>
                                            <td>{{$key+1}}</td>
                                            <td>{{$item->name}}</td>
                                            <td>{{$item->role_name}}</td>
                                            <td>{{$item->phone}}</td>
                                            
                                        </tr>
                                       @endforeach

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    
                    </div>
                </div>
                 <!-- /. ROW  -->
                
                    
                </div>     
                 <!-- /. ROW  -->           
    </div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
     <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->

@endsection