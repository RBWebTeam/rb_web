<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class ContactController extends Controller
{
    //
    public function contact_us(){
    	return view('contact');
    }
 
}
