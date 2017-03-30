<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewProcessController extends Controller
{
      public function  newSmeLoan(){

             return view('new-sme-loan');
          
      }


      public function newLoanAgainstProperty(){

           return view('new-loan-against-property');
      }

       public function newHomeLoan(){
               $data=0;
           return view('new-home-loan')->with($data);;

      }

       public function newCarLoan(){

       	 return view('new-car-loan');


      }

       public function newBusinessLoan(){
         
          return view('new-business-loan');

      }


      public function edelweiss(){

             return view('edelweiss');

      }

   public function usedCarLoan(){

         return view('used-car-loan');


      }


      
}
