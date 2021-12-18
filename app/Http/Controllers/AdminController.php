<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\Booking;
class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

   
    public function index()
    {
       
        $user=DB::table('users')->where('role_id','!=','1')->count();
         $renter=DB::table('users')->where('role_id',2)->count();
         $client=DB::table('users')->where('role_id',3)->count();
        
        $rents=DB::table('rentals')->count();
        $bookings=DB::table('bookings')->count();
    

        return view('backend.admin',compact('user','rents','bookings','renter','client'));
    }
    public function bookings()
    {
        $bookings=Booking::join('rentals','bookings.rental_id','rentals.id')
                            ->join('users','bookings.user_id','users.id')
                            ->select('bookings.*','users.phone','users.name','rentals.user_id')
                            ->get();
        return view('backend.bookings',compact('bookings'));
    }
    public function rents()
    {
        $rents=DB::table('rentals')->join('users','rentals.user_id','users.id')
                                    ->select('rentals.*','users.name')                        
                                    ->get();
        return view('backend.rents',compact('rents'));
    }
}
