<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;
use App\Models\Rental;
use Auth;
class BookingController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function create($id)
    { 
         $rent=Rental::find($id);
        $booking=new Booking();
        $booking->user_id=Auth::user()->id;
        $booking->phone=$rent->phone;
      
        $rent->status=FALSE;
        $booking->rental_id=$id;
        $booking->save();
         $notification=array(
            'messege'=>'Flat Booked',
            'alert-type'=>'success'
        );
        return redirect()->back()->with($notification);
    
    }
}
