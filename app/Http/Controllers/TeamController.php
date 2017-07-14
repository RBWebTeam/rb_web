<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use App\Http\Requests;
use DB;
use App\SEOlibraries\Seo;
class TeamController extends CallApiController
{
    public function team(){
      return view('team');
    }
 
}
