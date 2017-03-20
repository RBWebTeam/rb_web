<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use DB;
use Response;
use App\bank_quote_api_request;
use stdClass;
class MobileApiController extends ApiController
{
	public function mobile_api_compare(Request $req){
		//return "hiiiii";
		$data= $this->compare($req);
		//print_r($data->getData()->data);exit;
		//print_r( $data->getData()->quote_id);exit();
		if($data=='Failure occured' || $data->getData()->data==[]){
			$new_data=NULL;
			$status_Id=1;
			$msg="No record Found";
			$quote=NULL;
			$url=NULL;
		}
		else{
			$status_Id=0;
			$msg="data delievered";
			$new_data=$data->getData()->data;
			$quote=$data->getData()->quote_id;
			if($req['ProductId']==7){
				$url="http://beta.erp.rupeeboss.com/LAP/LAP_Form.aspx";
			}else{
				$url="http://beta.erp.rupeeboss.com/homeloan/home_loan_application_form.aspx";
			}
		}
		
		//print_r($a);
		$new_data=array('data' =>$new_data ,'msg' =>$msg,'status_Id'=>$status_Id,'quote_id'=>$quote,'url'=>$url );
		return $new_data;
			
	}

	public function personal_loan_mobile(Request $req){
		//return "hiiiii";
		$data= $this->comapre_personal_loan($req);
		//print_r($data);exit;
		//		print_r( $data->getData()->data);exit();
		if($data->getData()->data!=[]){
			$status_Id=0;
			$msg="data delievered";
			$new_data=$data->getData()->data;
			$quote=$data->getData()->quote_id;
			$url="http://beta.erp.rupeeboss.com/personalloan/personalloan.aspx";
		}
		else{
			$new_data=NULL;
			$status_Id=1;
			$msg="No record Found";
			$quote=NULL;
			$url=NULL;
		}
		
		//print_r($a);
		$new_data=array('data' =>$new_data ,'msg' =>$msg,'status_Id'=>$status_Id,'quote_id'=>$quote,'url'=>$url );
		return $new_data;
			
	}
	public function quote_selected(Request $req){
		//$id=$req['quote_id'];
		$update=DB::table('bank_quote_api_request')
		->where('id', $req['quote_id'])
		->update(['bank_id'=>$req['bank_id'], 'roi_type'=>$req['roi_type'], 'loan_eligible'=>$req['loan_eligible'], 'processing_fee'=>$req['processing_fee']]);
		if($update){
			$status_Id=0;
		}else{
			$status_Id=1;
		}
		$new_data=array('status_Id'=>$status_Id);
		return $new_data;
	}
	
}
