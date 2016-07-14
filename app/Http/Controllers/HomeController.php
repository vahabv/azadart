<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use Auth;
class HomeController extends Controller
{
   public function index ()
  {
    return  view ('index');
  }
  public function submitproject ()
  {
    return  view ('submitproject');
  }
public function auth ()
  {
    return  view ('auth');
  }
public function author ()
  {
    return  view ('author');
  }
  public function profiles ()
  {
    return  view ('profiles');
  }
  public function profile ()
  {
    $userType = Auth::user()->status;
    if($userType == 0){

      return  view ('profile');
    }else{
      return  view ('profile');
    }
  }
}





































//     /**
//      * Create a new controller instance.
//      *
//      * @return void
//      */
//     public function __construct()
//     {
//         $this->middleware('auth');
//     }

//     /**
//      * Show the application dashboard.
//      *
//      * @return \Illuminate\Http\Response
//      */
//     public function index()
//     {
//         return view('home');
//     }