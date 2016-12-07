<?php

namespace App\Http\Controllers\recording;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class recordingController extends Controller
{
     public function recording(){

     	  return view('recording/recording');
     }
}
