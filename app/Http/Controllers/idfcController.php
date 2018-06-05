<?php
namespace App\Http\Controllers;

use App\User;
use App\Repositories\UserRepository;
use App\Http\Controllers\Controller;

class IdfcController extends Controller
{
    public function idfc(){
		
	      return view('idfc');	
	}
}
