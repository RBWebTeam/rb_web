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
		$data=$req->all();
		//company_address
		$post_data='"agentname":"'.$data['agent_name'].'",
	"business_details":{
		"address":[{
			"work":"'.$data['agent_name'].'"
		}],
		"director_count":'.$data['agent_name'].',
		"employess_count":"'.$data['agent_name'].'",
		"is_offline_sales":'.$data['agent_name'].',
		"is_online_sales":'.$data['agent_name'].',
		"know_about_us":"'.$data['agent_name'].'",
		"loan_purpose":'.$data['agent_name'].',
		"nature_of_business":'.$data['agent_name'].',
		"online_sales_channels":['.$data['agent_name'].'],
		"ownership":'.$data['agent_name'].',
		"pan_number":"'.$data['agent_name'].'",
		"partner_count":'.$data['agent_name'].',
		"product_sell":['.$data['agent_name'].'],
		"proprietorship_type":'.$data['agent_name'].',
		"registration_details":'.$data['agent_name'].',
		"taxation_details":["'.$data['agent_name'].'"],
		"turnover":'.$data['agent_name'].'
	},
	"documents":[{
		"data":"'.$data['agent_name'].'",
		"title":"'.$data['agent_name'].'",
		"type":"'.$data['agent_name'].'"
	}],
	"is_loan_distributor":'.$data['agent_name'].',
	"loan_amount":"'.$data['agent_name'].'",
	"loan_tenure":'.$data['agent_name'].',
	"loan_type":'.$data['agent_name'].',
	"loandistributorid":"'.$data['agent_name'].'",
	"name":"'.$data['agent_name'].'",
	"online_ids":[{
		"aggregated_type":'.$data['agent_name'].',
		"credential":{
			"access_key":"'.$data['agent_name'].'",
			"secret_key":"'.$data['agent_name'].'",
			"username":"'.$data['agent_name'].'",
			"vendor_id":"'.$data['agent_name'].'"
		}
	}],
	"owner_details":[{
		"email":"'.$data['agent_name'].'",
		"name":"'.$data['agent_name'].'"
	}],
	"personal_details":{
		"DOB":"'.$data['agent_name'].'",
		"aadhaar_number":"'.$data['agent_name'].'",
		"address":[{
			"work":"'.$data['agent_name'].'"
		}],
		"education":'.$data['agent_name'].',
		"email":"'.$data['agent_name'].'",
		"family_details":'.$data['agent_name'].',
		"first_name":"'.$data['agent_name'].'",
		"income_details":"'.$data['agent_name'].'",
		"last_name":"'.$data['agent_name'].'",
		"mobile_number":'.$data['agent_name'].'
	},
	"reference_details":{
		"email":"'.$data['agent_name'].'",
		"first_name":"'.$data['agent_name'].'",
		"last_name":"'.$data['agent_name'].'",
		"middle_name":"'.$data['agent_name'].'",
		"mobile_number":'.$data['agent_name'].'
	},
	"repayment_frequency":'.$data['agent_name'].',
	"secret":"'.$data['agent_name'].'"';

	print_r($post_data);exit();
	}
}
