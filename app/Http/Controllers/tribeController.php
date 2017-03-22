<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class tribeController extends CallApiController
{
    public function tribe(){
		$post='';
        
	    $url = "http://api.rupeeboss.com/BankAPIService.svc/GetTribeLoan";
	    $result=$this->call_json_data_get_api($url,$post);
	    $http_result=$result['http_result'];
	    $error=$result['error'];
	    if($error){
	    	return view('went-wrong');
	    }else{
	    $temp_data=json_decode(json_decode($http_result))->response;
	    $data['data']=json_decode(json_encode($temp_data));
	    //  print "<pre>";
	    // print_r($data);exit();
	     
	    return view('tribe')->with($data);		
	    }
	    
	}
	public function save_tribe_form(Request $req){
		print_r($req->all());exit();
	}
}
