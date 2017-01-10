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

         $query=new registrationModel();
            try {
                  $user = Socialite::driver('facebook')->user();
                 }catch (Exception $e){
                  return redirect('facebook');
                 }
                  $authUser = $this->findOrCreateUser($user);
        
                  // $query->username($authUser, true);

                //  return Redirect::back();
                    
                     if($authUser){
                      
                      return Redirect::back();

                     }else{
                    return Redirect::back();

                     }

               //auth()->login($user);
             //  return redirect()->to('/home');
                    
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
                 // return Redirect::back();

               
                  if($authUser){
                      
                      return Redirect::back();

                     }else{
                    return Redirect::back();

                     }

          }



          private function findOrCreateUser($facebookUser){
             $query=new registrationModel();
             $authUser =$query->where('provider_user_id', $facebookUser->id)->first();
         if ($authUser){

                       Session::set('email', $authUser->email);
                       Session::set('user_id', $authUser->id);
                       Session::set('name', $authUser->username);
                       Session::set('is_login', 1);
               
             return $authUser->username;
        }else{
 
        //  $query->create([
        //     'username' => $facebookUser->name,
        //     'email' => $facebookUser->email,
        //     'contact' =>0,
        //     'password' =>0,
        //     'created_at'=>date('Y-m-d H:i:s'),
        //     'provider_user_id' => $facebookUser->id,
        //     'provider' => $facebookUser->avatar
        // ]);

   
                  $query->username=$facebookUser->name;
                  $query->email=$facebookUser->email;
                  $query->contact=0;
                  $query->password=0;
                  $query->provider_user_id=$facebookUser->id;
                  $query->provider=$facebookUser->avatar;
                  $query->created_at=date('Y-m-d H:i:s');

               if($query->save()) {
                  Session::set('email',$query->email);
                  Session::set('contact',$query->contact);
                  Session::set('user_id',$query->id);
                  Session::set('name',$query->username);
                  Session::set('is_login',1);
               
        }

      
}

return  $authUser;

          
    }


}
