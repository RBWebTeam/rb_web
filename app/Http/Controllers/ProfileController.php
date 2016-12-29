<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Response;
use App\Http\Requests;
use Session;
use Auth;
use DB;
class ProfileController extends Controller
{
    function my_profile(Request $req){
    	if(Session::get('is_login'))
    	{
         

        	return view('my-profile');
    	}else{
    		return redirect('/');
    	}
    }
  

}