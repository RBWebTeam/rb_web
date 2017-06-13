<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
 
use App\SEOlibraries\Seo;
class NewProcessController extends Controller
{
      public function  newSmeLoan(){

             return view('new-sme-loan');
          
      }


      public function newLoanAgainstProperty(){
                $un=new Seo();
              $data=$un->Loan_A_Property();
           return view('new-loan-against-property')->with($data);
      }

       public function newHomeLoan(){
                  $un=new Seo();
                  $data=$un->HomeLoan_();
           return view('new-home-loan')->with($data);

      }

       public function newCarLoan(){
                     $un=new Seo();
                   $data=$un->Car_Loan();
       	 return view('new-car-loan')->with($data);


      }

       public function newBusinessLoan(){
              $un=new Seo();
              $data=$un->Unsecured_Business();
       return view('new-business-loan')->with($data);

      }


      public function edelweiss(){

             return view('edelweiss');

      }

   public function usedCarLoan(){
            
              $un=new Seo();
              $data=$un->Used_Car();
         return view('used-car-loan')->with($data);


      }

      public function newSmartHomeLoan(){

                   $un=new Seo();
                  $data=$un->Smart_Home_Loan();
         return view('new-smart-home-loan')->with($data);


      }


      
}
