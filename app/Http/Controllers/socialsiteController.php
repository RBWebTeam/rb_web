<?php

namespace App\Http\Controllers;
use Laravel\Socialite\Contracts\User as ProviderUser;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Socialite;
class socialsiteController extends Controller
{
     
     public function  facebook(){

echo "use Laravel\Socialite\Contracts\User as ProviderUser;";
     	//return Socialite::driver('facebook')->redirect();
     }

      public function  callback(){

     	return Socialite::driver('facebook')->redirect();
     }
}
