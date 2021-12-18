<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Rental;
use App\Models\Booking;
use Image;
use Auth;
class RentalController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $rents=Rental::paginate(6);
        return view('frontend.property',compact('rents'));
    }
    public function rent()
    {
        if(Auth::user()->role_id==2){
        $rents=Rental::where('user_id',Auth::user()->id)->paginate(6);
        }
        elseif(Auth::user()->role_id==3){
        $rents=Rental::join('bookings','rentals.id','bookings.rental_id')
                        ->where('bookings.user_id',Auth::user()->id)
                       ->paginate(6);
        }
        else{
            $rents=Rental::paginate(6);
        }
        return view('home',compact('rents'));
    }
    public function create()
    {
       
        return view('frontend.create');
    }
    public function store(Request $req)
    {
        $rent=new Rental();
        $rent->location=$req->location;
        $rent->user_id=Auth::user()->id;
        $rent->bedroom=$req->bedroom;
        $rent->toilet=$req->toilet;
        $rent->balcony=$req->balcony;
        $rent->status=TRUE;
        $rent->rent_fee=$req->rent_fee;
        $rent->phone=Auth::user()->phone;
        $rent->description=$req->description;
         $image_one=$req->image_one;
        $image_two=$req->image_two;
        $image_three=$req->image_three;
        
                $image_one_name=hexdec(uniqid()).'.'.$image_one->getClientOriginalExtension();
            Image::make($image_one)->resize(500,600)->save('frontend/img'.$image_one_name);
            $rent->image_one='frontend/img'.$image_one_name;

            $image_two_name=hexdec(uniqid()).'.'.$image_two->getClientOriginalExtension();
            Image::make($image_two)->resize(500,600)->save('frontend/img'.$image_two_name);
            $rent->image_two='frontend/img'.$image_two_name;
            $image_three_name=hexdec(uniqid()).'.'.$image_three->getClientOriginalExtension();
            Image::make($image_three)->resize(500,600)->save('frontend/img'.$image_three_name);
            $rent->image_three='frontend/img'.$image_three_name;
            
        $rent->save();
        
             $notification=array(
            'messege'=>'Rent Details Saved',
            'alert-type'=>'success'
        );
            return redirect()->back()->with($notification);
    }
    public function show($id)
    {
        $rent=Rental::find($id);
        return view('frontend.show',compact('rent'));
    }
     public function edit($id)
    {
        $rent=Rental::find($id);
        return view('frontend.edit',compact('rent'));
    }
    public function update(Request $req,$id)
    {
        $rent=Rental::find($id);
        $rent->location=$req->location;
        $rent->user_id=Auth::user()->id;
        $rent->bedroom=$req->bedroom;
        $rent->toilet=$req->toilet;
        $rent->balcony=$req->balcony;
        $rent->status=TRUE;
        $rent->rent_fee=$req->rent_fee;
        $rent->phone=Auth::user()->phone;
        $rent->description=$req->description;
        
         $old_img_one=$req->old_img_one;
         $old_img_two=$req->old_img_two;
         $old_img_three=$req->old_img_three;
            
           
            $image_one=$req->file('image_one');
            $image_two=$req->file('image_two');
            $image_three=$req->file('image_three');

            
                unlink($old_img_one);
                 unlink($old_img_two);
                  unlink($old_img_three);
        
                $image_one_name=hexdec(uniqid()).'.'.$image_one->getClientOriginalExtension();
            Image::make($image_one)->resize(500,600)->save('frontend/img'.$image_one_name);
            $rent->image_one='frontend/img'.$image_one_name;

            $image_two_name=hexdec(uniqid()).'.'.$image_two->getClientOriginalExtension();
            Image::make($image_two)->resize(500,600)->save('frontend/img'.$image_two_name);
            $rent->image_two='frontend/img'.$image_two_name;
            $image_three_name=hexdec(uniqid()).'.'.$image_three->getClientOriginalExtension();
            Image::make($image_three)->resize(500,600)->save('frontend/img'.$image_three_name);
            $rent->image_three='frontend/img'.$image_three_name;
           
        $rent->update();
        
             $notification=array(
            'messege'=>'Rent Details Updated',
            'alert-type'=>'success'
        );
            return redirect()->back()->with($notification);
    }
     public function delete($id)
    {
        $rent=Rental::find($id);
       
         unlink($rent->image_one);
         unlink($rent->image_two);
        unlink($rent->image_three); 
        $rent->delete();
         $notification=array(
            'messege'=>'Rent Details Deleted',
            'alert-type'=>'success'
        );
            return redirect()->route('rents')->with($notification);
    }
}
