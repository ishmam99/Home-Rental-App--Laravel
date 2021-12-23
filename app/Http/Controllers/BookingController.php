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
        $rent->update();
        $booking->rental_id=$id;
        $booking->status=TRUE;
        $booking->save();
         $notification=array(
            'messege'=>'Flat Booked',
            'alert-type'=>'success'
        );
        return redirect()->back()->with($notification);
    
    }
    public function delete($id)
    {
        $booking=Booking::find($id);
        $booking->delete();
        
         $notification=array(
            'messege'=>'Booking Deleted',
            'alert-type'=>'success'
        );
        return redirect()->back()->with($notification);
    
    }
    public function active($id)
    {
        $booking=Booking::find($id);
        $booking->status=FALSE;
        $booking->update();
        $notification=array(
            'messege'=>'Booking Activated',
            'alert-type'=>'success'
        );
        return redirect()->back()->with($notification);
    }
    public function inactive($id)
    {
        $booking=Booking::find($id);
        $booking->status=TRUE;
        $booking->update();
        $notification=array(
            'messege'=>'Booking DEACTIVATED',
            'alert-type'=>'success'
        );
        return redirect()->back()->with($notification);
    }
}
