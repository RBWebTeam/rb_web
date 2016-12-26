<?php

namespace App\Http\Controllers;
use Laravel\Socialite\Contracts\User as ProviderUser;
use Illuminate\Http\Request;

use App\Http\Requests;
//use App\Http\Controllers\Controller;
use Socialite;
use App\registrationModel;
class socialsiteController extends Controller
{
     
     public function  facebook(){


     	 return Socialite::driver('facebook')->redirect();
     }

      public function  callback(){



      	
           try {
            $user = Socialite::driver('facebook')->user();

        } catch (Exception $e) {
            return redirect('facebook');
        }
 
        $authUser = $this->findOrCreateUser($user);
 
        // registrationModel::login($authUser, true);
         


        return redirect('/');
       



     }


      private function findOrCreateUser($facebookUser){

      	 $query=new registrationModel();
         $authUser =$query->where('provider_user_id', $facebookUser->id)->first();
 
        if ($authUser){
            return $authUser;
        }
 
        return $query->create([
            'username' => $facebookUser->name,
            'email' => $facebookUser->email,
            'contact' =>0,
            'password' =>0,
            'created_at'=>date('Y-m-d H:i:s'),
            'provider_user_id' => $facebookUser->id,
            'provider' => $facebookUser->avatar
        ]);
    }
}
