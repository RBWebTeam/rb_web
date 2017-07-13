<?php

namespace App\SEOlibraries;

use Illuminate\Database\Eloquent\Model;

class Seolink extends Model
{
     public function SMEWorkingCapital(){

             $title='Working Capital Loan | Compare & Check Bankwise Eligibility | Apply Online now';
             $description='Fulfill Your Short Term Cash Needs of a Business. Check Bankwise Eligibility, Company Finance, EMI Details & Apply Digitally on Rupeeboss.com';
             $keywords='Business Capital Loan,Working Capital Loan, Working Capital Finance, Working Capital Loan Eligibility Criteria, Working Capital Loan Interest rates, Small Business Working Capital Loans, Start-up Capital for Business';

            $workingk = array('title'=>$title,'description'=>$description,'keywords'=>$keywords);
     return $workingk;
     }


   public function CreditReport(){
        
             $title='Know Your Credit Score Online for FREE on Rupeeboss.com';
             $description='Check your Credit Score Online and get its Equivalent FREE Credit Report. Track your Progress and get personalized adviceto optimize Your score. Get started now ';
             $keywords='Free Credit Report,Credit Score, Free Credit Score, Check Credit Score Online, How to Get Free Credit Report, Credit Information';

            $creditR= array('title'=>$title,'description'=>$description,'keywords'=>$keywords);
     return $creditR;
              
   }


     public function TrackApplication(){

            $title='Track your Loan Application Status Online at RupeeBoss.com';
            $description='Track Your Loan Application Status Online. Enter the relevant details and get updated information about your Loan Application Instantly on RupeeBoss.com';
            $keywords='Loan Application Status, Track Application Status, Check Loan Status, Loan Status Tracker, Check Loan Application Status Online';
             $TrackA= array('title'=>$title,'description'=>$description,'keywords'=>$keywords);
     return $TrackA;
     }



       public function Calculators(){

            $title='Calculate EMI for Personal, Home, Business & Working Capital Loan';
            $description='Easily Calculate EMI for Home, Personal, Business, Working Capital Loan using flexible EMI Calculator & get clear loan breakup, tenure, interest amount and other Details';
            $keywords='EMI Calculator, Personal Loan Calculator, Home Loan Calculator, Business Loan Calculator, Working Capital Calculator, Income Calculator, Calculate EMI Online';
             $calculators= array('title'=>$title,'description'=>$description,'keywords'=>$keywords);
     return $calculators;
     }


       public function MagicLink(){

            $title='Get Instant Loan | Apply for all kind of Loan at Low Rate - Rupeeboss.com';
            $description='Home Loan, Personal Loan, Unsecured Business Loan, Loan Against Property, Car Loan, Balance Transfer, Credit Card';
            $keywords='Home Loan, Personal Loan, Unsecured Business Loan, Loan Against Property, Car Loan, Balance Transfer, Credit Card';
            $MagicL= array('title'=>$title,'description'=>$description,'keywords'=>$keywords);
     return $MagicL;
     }


       public function CreditCardForm(){

            $title='Credit Card | Apply for Best Credit Card Online - Rupeeboss.com';
            $description='Apply online for Credit Card on Rupeeboss.com';
            $keywords='Credit Card, Apply for Best Credit Card, Online Credit Card Application ';
            $CreditCard= array('title'=>$title,'description'=>$description,'keywords'=>$keywords);
     return $CreditCard;
     }



//Footer Links – Home Loan
     public function HICICIbank(){

            $title='ICICI Bank | Home Loan Eligibility & Rate of Interest';
            $description='ICICI Bank Home Loan, ICICI Housing Loan, ICICI Bank Home Loan Interest Rate, Apply Online for ICICI Bank Home Loan, ICICI Home Loan Eligibility, Flexi EMI Home Loan';
            $keywords='ICICI Bank Home Loan, ICICI Housing Loan, ICICI Bank Home Loan Interest Rate, Apply Online for ICICI Bank Home Loan, ICICI Home Loan Eligibility, Flexi EMI Home Loan,';
            $icicibank= array('title'=>$title,'description'=>$description,'keywords'=>$keywords);
     return $icicibank;



     }


     public function TATACapital(){

            $title='TATA Capital | Home Loan Eligibility & Rate of Interest';
            $description='TATA Capital Home Loan Interest Rate, TATA Home Loans, Flexi EMI Home Loan, Home Loans with TATA Capital';
            $keywords='TATA Capital Home Loan Interest Rate, TATA Home Loans, Flexi EMI Home Loan, Home Loans with TATA Capital';

            $tatacapital= array('title'=>$title,'description'=>$description,'keywords'=>$keywords);
     return $tatacapital;

     }


     // Footer Links – Personal Loan

     public function PCapitalFirst(){

           $title='Capital First | Personal Loan Eligibility & Rate of Interest';
           $description='Capital First Personal Loan Interest rate, Capital First Personal Loan,Capital First Personal Loan Eligibility ';
           $keywords='Capital First Personal Loan Interest rate, Capital First Personal Loan, Capital First Personal Loan Eligibility';
           $capitalfirst= array('title'=>$title,'description'=>$description,'keywords'=>$keywords);
    return $capitalfirst;


     }


       public function PICICIbank(){

          $title='ICICI Bank | Personal Loan Eligibility & Rate of Interest';
          $description='ICICI Bank Personal Loan, Personal Loan Interest Rate, ICICI Bank Personal Loan Eligibility';
          $keywords='ICICI Bank Personal Loan, Personal Loan Interest Rate, ICICI Bank Personal Loan Eligibility ';
          $icici= array('title'=>$title,'description'=>$description,'keywords'=>$keywords);
   return $icici;


     }


       public function PTATACapital(){

         $title='TATA Capital | Personal Loan Eligibility & Rate of Interest';
         $description='TATA Capital Personal Loan Interest Rate, TATA Personal Loans, Personal Loans with TATA Capital ';
         $keywords='TATA Capital Personal Loan Interest Rate, TATA Personal Loans, Personal Loans with TATA Capital';
           $tatacapital= array('title'=>$title,'description'=>$description,'keywords'=>$keywords);
    return $tatacapital;


     }


     //Footer Links – Business Loan

     
    public function BICICIbank(){
              
                   $title='ICICI Bank | Business Loan Eligibility & Rate of Interest';
                   $description='ICICI Bank Business Loan, ICICI Bank Business Loan Interest Rate, Apply Online for ICICI Bank Business Loan';
                   $keywords='ICICI Bank Business Loan, ICICI Bank Business Loan Interest Rate, Apply Online for ICICI Bank Business Loan';
                   $icici= array('title'=>$title,'description'=>$description,'keywords'=>$keywords);
            return $icici;

    }

    public function BTATACapital(){
              
                   $title='TATA Capital | Business Loan Eligibility & Rate of Interest';
                   $description='TATA Capital Business Loan Interest Rate, TATA Business Loans, Business Loans with TATA Capital';
                   $keywords='TATA Capital Business Loan Interest Rate, TATA Business Loans, Business Loans with TATA Capital ';
                   $tata= array('title'=>$title,'description'=>$description,'keywords'=>$keywords);
            return $tata;

    }

    public function BAdityaBirla(){
              
                   $title='Aditya Birla | Business Loan Eligibility & Rate of Interest ';
                   $description='Aditya Birla Business Loan, Aditya Birla Business Loan Interest Rate, Business Loans with Aditya Birla ';
                   $keywords='Aditya Birla Business Loan, Aditya Birla Business Loan Interest Rate, Business Loans with Aditya Birla ';
                   $icici= array('title'=>$title,'description'=>$description,'keywords'=>$keywords);
            return $icici;

    }

}
