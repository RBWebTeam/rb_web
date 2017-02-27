<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class ContactController extends InitialController
{
    //
    public function contact_us(){
    	$keywords='Apply For Loan Online,Cheapest Loans,Best Loans,Loan Interest Rates,Check & Compare Loan Rates,Home Loan,Personal Loan,Business Loan,Car Loan,Express Loan,Sme Loan,Loan Against Property,Balance Transfer,Rupeeboss Customer Care Service,Contact Rupeeboss'; 

		$data['title']='Contact Us – Apply all kind of Loans on Rupeeboss.com';
    	$data['description']='Compare & Apply for Best Loans & Credit Cards. Rupeeboss Customer care Services are here to solve your banking related Queries. Contact Us now on Rupeeboss.com';
    	return view('contact')->with($data)->with('keywords',$keywords);
    }
 
}
