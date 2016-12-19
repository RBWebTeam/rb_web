<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use DB;
class AutoCompleteController extends Controller {
    
    public function index(){
        return view('personal-loan-process');
   }
    public function autoComplete(Request $request) {



        
        $term = Input::get('term');
        $products=DB::table('City_Master')->select('city_name')
        ->where('city_name', 'LIKE', '%'.$term.'%')
        ->take(5)->get();
        //print_r( $products);
        $data=array();
        foreach ($products as $product) {
                $data[]=array('value'=>$product->city_name);
        }
        if(count($data)){
           //    print_r($data);
             return $data;
         }
        else
            return ['value'=>'No Result Found'];
    }
    
}