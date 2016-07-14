<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\workers;
use Auth;

class ProfileController extends Controller
{
    public function insert(Request $request)
   {
    
    $workers=new workers;
    $workers->worker_name=$request->wname;
    $workers->worker_surname=$request->wadres;
    $workers->worker_gender=$request->wmail;
    $workers->user_id=Auth::user()->id;
    $workers->save();
    return redirect('/profile');

   }
}
