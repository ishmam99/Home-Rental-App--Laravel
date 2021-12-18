<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Rental;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $rents=Rental::orderby('id', 'DESC')->where('status',TRUE)->get();
         $rentals=Rental::limit(5)->where('status',TRUE)->get();
        return view('welcome',compact('rents','rentals'));
    }
    public function about()
    {
        return view('about');
    }
}
