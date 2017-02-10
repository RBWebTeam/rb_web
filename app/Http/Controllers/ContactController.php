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
    	$data['description']='To save money, compare and pick lowered interest rates and save thousands on your home loan, personal loan, business loan and car loan only on Rupeeboss.com';
    	return view('contact')->with($data)->with('keywords',$keywords);
    }
 
}
