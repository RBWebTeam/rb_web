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
		//return "hiiiii";
		$data= $this->compare($req);
		//print_r( $data->getData()->quote_id);exit();
		if($data!='Failure occured'){
			$status_Id=0;
			$msg="data delievered";
			$new_data=$data->getData()->data;
			$quote=$data->getData()->quote_id;
			$url="http://beta.erp.rupeeboss.com/homeloan/home_loan_application_form.aspx";
		}
		else{
			$new_data=new stdClass();
			$status_Id=1;
			$msg=" Something went wrong.";
			$quote=new stdClass();
			$url=new stdClass();
		}
		
		//print_r($a);
		$new_data=array('data' =>$new_data ,'msg' =>$msg,'status_Id'=>$status_Id,'quote_id'=>$quote,'url'=>$url );
		return $new_data;
			
	}
}
