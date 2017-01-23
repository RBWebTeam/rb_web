<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use DB;
use Response;
use App\bank_quote_api_request;

class MobileApiController extends ApiController
{
	public function mobile_api_compare(Request $req){
		
		$data= $this->compare($req);
		//print_r($data);exit();
		if($data!='-1' && !empty( $data->getData()->data)){
			$status_Id=0;
			$msg="data delievered";
			$new_data=$data->getData()->data;
		}
		else{
			$new_data=NULL;
			$status_Id=1;
			$msg=" Something went wrong.";
			
		}
		
		//print_r($a);
		$new_data=array('data' =>$new_data ,'msg' =>$msg,'status_Id'=>$status_Id );
		return $new_data;
			
	}
}
