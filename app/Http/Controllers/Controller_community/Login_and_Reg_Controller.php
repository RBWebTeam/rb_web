<?php

namespace App\Http\Controllers\Controller_community;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\community_model\userModel;
use App\Http\Requests;
use Validator;
use Redirect;
use Session;
use URL;
use Illuminate\Support\Facades\Hash;

use DB;

class Login_and_Reg_Controller extends InitialController
{
     public function login_regi(Request $request){
            
                   $session=$request->id;

                   $request->Session()->put('Url_key',$session);
                   
                   
                
          return view('community.community_auth.login');

     }


      public function registration(){
              
             
             return view('community.community_auth.register');
     }


  public function store_registration(Request $request){ 
       

                
                
                 $validator=Validator::make($request->All(),array(
                            'name' => 'required|max:255',
                            'email' => 'required|email|max:255|unique:community_users',   
                            'password' => 'required|min:6|confirmed',

                           ));






if($validator->fails()) {

    return Redirect::back()->withErrors($validator)->withInput();
  
  
}else{
             $query=new userModel();
             $query->name=$request->name;
             $query->email=$request->email;
             $query->password=bcrypt($request->password);
             $query->save();
    return redirect('community/login/500');
}


     } 


     public function getlogin(Request $request){


            $data = $request->session()->all();
            print_r($data);
            
           $errors=Validator::make($request->All(),array(
                            'password' =>'required|min:6',

                            
               ));


if($errors->fails()) {


 return Redirect::back()->withErrors($errors)->withInput();
  
  
       }else{

         $query=new userModel();
 
         $email=$query->where('email','=',$request->email)->first();
         
         if($email!=''){
            
           
         if (Hash::check($request->password, $email->password)) {
               
              $request->session()->put('email',$email->email);
              $request->session()->put('id',$email->id);
              $request->session()->put('name',$email->name);

            // return redirect()->intended('community/question');
                  
                   
                      // if (Session::has('qu_1')){

                      //       return redirect()->intended('community/question/'.$request->id);
                        
                      // }else{

                      //     return redirect()->intended('community/question');
                      // }
                          

                           
                           $ur_1=Session()->get('Url_key');
                                 
                          
                            if($ur_1==5001){
                            return redirect()->intended('community/question');
                            
                               //Session::reflash();
                            }else{
                               //Session::reflash();
                              return redirect()->intended('community/answers/'.$ur_1);
                            }
                            
                         

                //return redirect($request->session()->get('redirectURL'));

         }else{

  Session::flash('flash_message', 'your email or password is incorrect. please try again');
   return Redirect::back()->withErrors($errors)->withInput();
}

         }else{

   Session::flash('flash_message', 'your email or password is incorrect. please try again');
   return Redirect::back()->withErrors($errors)->withInput();
}
  

        

       }



     }


 public function autoCompletetags(Request $request) {
         $term =$request->tags_c ;//Input::get('tags_c');
        $products=DB::table('master_tags')->select('categories')
        ->where('categories', 'LIKE', '%'.$term.'%')
        ->take(5)->get();
       

        $data=array();
        foreach ($products as $product) {
                $data[]=array('value'=>$product->categories);
        }
        if(count($data)){
        

             return $data;
         }
        else
            return ['value'=>'No Result Found'];



    }






}
