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

 public function searchcityfn(Request $request) {



        $term = Input::get('term');
        $query=DB::select('call usp_load_statecodewise_city(?,?)',[$request->state_id,$term]);


         $data=array();
        foreach ($query as $product) {
                $data[]=array('value'=>$product->City_Name);
        }
        if(count($data)){
            
             return $data;
         }
        // else
        //     return ['value'=>' '];

 
        
   

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


    public function autoComplete_kotak_hl_city(Request $request) {
        $term = Input::get('term');
        $products=DB::table('kotak_city_master')->select('city_name','city_code')
        ->where('city_name', 'LIKE', '%'.$term.'%')
        ->take(5)->get();
        //print_r( $products);
        $data=array();
        foreach ($products as $product) {
                $data[]=array('value'=>$product->city_name,'datavalue'=>$product->city_code);
        }
        if(count($data)){
           //    print_r($data);
             return $data;
         }
        else
            return ['value'=>'No Result Found'];
    }

    public function autoComplete_city_area(Request $request) {
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

    public function autoComplete_tata_bl_city(Request $request) {
        $term = Input::get('term');
        $products=DB::table('tata_capital_bl_city_master')->select('city_name')
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

    public function autoComplete_tata_bl_state(Request $request) {
        $term = Input::get('term');
        $products=DB::table('tata_capital_state_master')->select('state_name')
        ->where('state_name', 'LIKE', '%'.$term.'%')
        ->take(5)->get();
        //print_r( $products);
        $data=array();
        foreach ($products as $product) {
                $data[]=array('value'=>$product->state_name);
        }
        if(count($data)){
             // print_r($data);
             return $data;
         }
        else
            return ['value'=>'No Result Found'];
    }


    public function autoComplete_product(Request $request) {
        $term = Input::get('term');
        $products=DB::table('product_master')->select('Product_Name','Product_Id')
        ->where('Product_Name', 'LIKE', '%'.$term.'%')
        ->take(5)->get();
        //print_r( $products);
        $data=array();
        foreach ($products as $product) {
                $data[]=array('value'=>$product->Product_Name,'datavalue'=>$product->Product_Id);
        }
        if(count($data)){
           //    print_r($data);
             return $data;
         }
        else
            return ['value'=>'No Result Found'];
    }

    public function autoComplete_kotak_plcompany(Request $request) {
        $term = Input::get('term');
        $products=DB::table('kotak_pl_company_master')->select('employername','final_category')
        ->where('employername', 'LIKE', '%'.$term.'%')
        ->take(5)->get();
        //print_r( $products);
        $data=array();
        foreach ($products as $product) {
                $data[]=array('value'=>$product->employername,'datavalue'=>$product->final_category);
        }
        if(count($data)){
           //    print_r($data);
             return $data;
         }
        else
            return ['value'=>'No Result Found'];
    }


}