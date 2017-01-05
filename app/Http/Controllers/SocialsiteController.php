<?php

namespace App\Http\Controllers;
use Laravel\Socialite\Contracts\User as ProviderUser;
use Illuminate\Http\Request;

use App\Http\Requests;
//use App\Http\Controllers\Controller;
use Socialite;
use App\registrationModel;
use Validator;
use Redirect;
use Session;
use URL;

class SocialsiteController extends Controller{
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

 
     public function  google(){     
       return Socialite::driver('google')->redirect();
     }

      public function  Googlecallback(){
      try {
          $user = Socialite::driver('google')->user();
         
          }catch (Exception $e) {
            return redirect('google');
        }
                    $authUser = $this->findOrCreateUser($user);
                    return redirect('/');

          }



          private function findOrCreateUser($facebookUser){
             $query=new registrationModel();
         $authUser =$query->where('provider_user_id', $facebookUser->id)->first();
        if ($authUser){

                       Session::set('email', $authUser->email);
                       Session::set('user_id', $authUser->id);
                       Session::set('name', $authUser->username);
                       Session::set('is_login', 1);
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
