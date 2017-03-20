<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
        return view('magic-link');
    }

 
}
