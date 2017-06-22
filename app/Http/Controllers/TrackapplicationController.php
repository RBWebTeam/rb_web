<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use App\Http\Requests;
use DB;
use App\SEOlibraries\Seo;
class TrackapplicationController extends CallApiController
{
    public function tracking(){
        return view('tracking');
    }
    public function tracking_sub(Request $req){
        try{
        // print "<pre>"; print_r($req->all());exit();
    
    $res=$req->all();
    

    $post_data=json_encode($res);
    $url = $this::$url_static."BankAPIService.svc/GetAppStatusDetail";
    $result=$this->call_json_data_api($url,$post_data);
    $http_result=$result['http_result'];
    $error=$result['error'];
    
    $data['data'] = json_decode($http_result);
    // $status = $obj[0]->Status;
    // print_r($obj[0]->Status);exit();
    // if ($status == "0") 
    // {   
    //     return $status
    // }else{
    //     $status=2;
    // }
    return view('tracking_view')->with($data); 
    }catch(\Exception $ee){
        print_r($ee->getMessage());
    }
    }

 
}
