<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use DB;
class AutoCompleteController extends InitialController {
    
    public function index(){
        return view('personal-loan-process');
   }
    public function autoComplete(Request $request) {



        
        $term = Input::get('term');
        $products=DB::table('city_master')->select('city_name')
        ->where('city_name', 'LIKE', '%'.$term.'%')
        ->take(5)->get();
        //print_r( $products);
        $data=array();
        foreach ($products as $product) {
                $data[]=array('value'=>$product->city_name);
        }
        if(count($data)){
             // print_r($data);
             return $data;
         }
        else
            return ['value'=>'No Result Found'];
    }


    public function autoComplete_state(Request $request) {
        $term = Input::get('term');
        $products=DB::table('state_master')->select('state_name')
        ->where('state_name', 'LIKE', '%'.$term.'%')
        ->take(5)->get();
        //print_r( $products);
        $data=array();
        foreach ($products as $product) {
                $data[]=array('value'=>$product->state_name);
        }
        if(count($data)){
           //    print_r($data);
             return $data;
         }
        else
            return ['value'=>'No Result Found'];
    }

    public function autoComplete_company(Request $request) {
        $term = Input::get('term');
        $products=DB::table('icici_creditcard_company_list')->select('company_name')
        ->where('company_name', 'LIKE', '%'.$term.'%')
        ->take(5)->get();
        //print_r( $products);
        $data=array();
        foreach ($products as $product) {
                $data[]=array('value'=>$product->company_name);
        }
        if(count($data)){
           //    print_r($data);
             return $data;
         }
        else
            return ['value'=>'No Result Found'];
    }

    public function autoComplete_iiflcompany(Request $request) {
        $term = Input::get('term');
        $products=DB::table('iifl_company_list')->select('company_name','category')
        ->where('company_name', 'LIKE', '%'.$term.'%')
        ->take(5)->get();
        //print_r( $products);
        $data=array();
        foreach ($products as $product) {
                $data[]=array('value'=>$product->company_name,'datavalue'=>$product->category);
        }
        if(count($data)){
           //    print_r($data);
             return $data;
         }
        else
            return ['value'=>'No Result Found'];
    }


    public function autoComplete_kotak_city(Request $request) {
        $term = Input::get('term');
        $products=DB::table('kotak_city_master')->select('city_name','city_code')
        ->where('city_name', 'LIKE', '%'.$term.'%')
        ->take(5)->get();
        //print_r( $products);
        $data=array();
        foreach ($products as $product) {
                $data[]=array('value'=>$product->city_code,'datavalue'=>$product->city_code);
        }
        if(count($data)){
           //    print_r($data);
             return $data;
         }
        else
            return ['value'=>'No Result Found'];
    }

    public function autoComplete_kotak_city_area(Request $request) {
        $term = Input::get('term');
        $products=DB::table('kotak_city_area_master')->select('city_area','area_code')
        ->where('city_area', 'LIKE', '%'.$term.'%')
        ->take(5)->get();
        //print_r( $products);
        $data=array();
        foreach ($products as $product) {
                $data[]=array('value'=>$product->city_area,'datavalue'=>$product->area_code);
        }
        if(count($data)){
           //    print_r($data);
             return $data;
         }
        else
            return ['value'=>'No Result Found'];
    }
}