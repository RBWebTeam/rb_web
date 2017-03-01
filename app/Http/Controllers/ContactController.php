<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class ContactController extends InitialController
{
    //
    public function contact_us(){
    	$keywords='Best Loans,Apply for Loan,Compare Loans,Credit Cards,Balance Transfer'; 

		$data['title']='Contact Us | Apply for all kinds of Loans on Rupeeboss.com';
    	$data['description']='Compare & Apply for Best Loans & Credit Cards. Rupeeboss Customer care Services are here to solve your banking related Queries. Reach us now on Rupeeboss.com';
    	return view('contact')->with($data)->with('keywords',$keywords);
    }
 
}
