<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use App\Http\Requests;
use DB;
class ContactController extends InitialController
{
    //
    public function contact_us(){
    	$keywords='Best Loans,Apply for Loan,Compare Loans,Credit Cards,Balance Transfer'; 

		$data['title']='Contact Us | Apply for all kinds of Loans on Rupeeboss.com';
    	$data['description']='Compare & Apply for Best Loans & Credit Cards. Rupeeboss Customer care Services are here to solve your banking related Queries. Reach us now on Rupeeboss.com';
    	return view('contact')->with($data)->with('keywords',$keywords);
    }

    public function new_personal_loan(){
    	return view('new-personal-loan');
    }
    
    public function new_personal_loan_register(Request $req){
        print_r($req->all());exit();
     
         
         $query=DB::table('new_personal')
        ->insert(['purpose'=>$req->purpose,
                 'custom_id'=>$req->custom_id,
                 'loanamount'=>$req->loanamount,
                 'city'=>$req->city,
                 'tenure'=>$req->tenure,
                 'name'=>$req->name,
                 'gender'=>$req->gender,
                 'dob'=>$req->dob,
                 'employment'=>$req->employment,
                 'monthly_income'=>$req->monthly_income,
                 'existing_emi'=>$req->existing_emi,
                'created_at'=>date("Y-m-d H:i:s"),
                'updated_at'=>date("Y-m-d H:i:s")]);

      

    } 



    public function magic_link(){
        //print_r("hello");exit();
        $myString = isset($_GET['referrer']);
          if($myString){
            
            $myArray = explode('@', $_GET['referrer']);
            if(isset($myArray[0])){
              Session::put('empid', $myArray[0]);
              $empid = Session::get('empid');
             
            }
            if(isset($myArray[1])){
             Session::put('brokerid', $myArray[1]);
              $brokerid = Session::get('brokerid');
            }
            if(isset($myArray[2])){
              Session::put('source', $myArray[2]);
              $source = Session::get('source');


            }
            
        }

        return view('magic-link');
    }

 
}
