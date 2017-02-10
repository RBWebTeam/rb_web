<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class ContactController extends Controller
{
    //
    public function contact_us(){
    	$keywords='Apply For Loan Online,Cheapest Loans,Best Loans,Loan Interest Rates,Check & Compare Loan Rates,Home Loan,Personal Loan,Business Loan,Car Loan,Express Loan,Sme Loan,Loan Against Property,Balance Transfer'; 

		$data['title']='Contact Us – Apply all kind of Loans on Rupeeboss.com';
    	$data['description']='Contact us of Rupeeboss Customer care Service to solve your all banking related Queries. So clear your query and apply For loan online on Rupeeboss.com';
    	return view('contact')->with($data)->with('keywords',$keywords);
    }
 
}
