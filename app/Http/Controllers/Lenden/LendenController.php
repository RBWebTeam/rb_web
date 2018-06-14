<?php
namespace App\Http\Controllers\Lenden;
use Illuminate\Http\Request;
use Session;
use DB;
use Response;
use App\Http\Controllers\CallApiController as CallApiController;
use Validator;
use Redirect;
use Input;
class LendenController extends CallApiController
{
	
	private static $header="Authorization:Token 87bb13b847ffcbb8ae7fbbfe2fb26c04f86ffcb5";
	private static $lenden_url="http://dev.lendenclub.com/api/";
	private $x;

	function lenden_homepage(Request $req){
		
		return view("lenden");
	}
	function send_otp(Request $req){
	
		$url=$this::$lenden_url."mobile-verify";
		$data=$this::preprocess_req($req);
		if(isset($req['OTP'])){
			$data["request_type"]="send_otp";
		}else{
			$data["request_type"]="verify_otp";
		}
      	return $this::get_otp_api_res($data,$url);
	}
	function verify_otp(Request $req){
		$url=$this::$lenden_url."mobile-verify";
		$data=$this::preprocess_req($req);
        $data["request_type"]="send_otp";
        return $this::get_otp_api_res($data,$url);
	}
	function sign_up(Request $req){
		$url=$this::$lenden_url."sign-up";
		$data=$this::preprocess_req($req);
		return $this::get_otp_api_res($data,$url);
	}
	function task_id(Request $req){
		$url=$this::$lenden_url."channel-partner/borrowing/dashboard";

		//response->channel_partner_data->reference_data_list->task_id
		$data=$this::preprocess_req($req);
		
		$x= json_decode($this::get_otp_api_res($data,$url));
		
		if($x->code=200 && isset($x->response->channel_partner_data->reference_data_list[0]->loan->task_id)){
			$taskid=$x->response->channel_partner_data->reference_data_list[0]->loan->task_id;
			Session::put('taskid',$taskid);

		}else{
			$taskid=0;
		}
		 if($x->code==200){
        	$x->code=1;
        	$x->channel_partner_data=null;
        	return Response::json($x);
        }else{
        	$x->code=0;
        	return Response::json($x);
        }
	}	

	function get_otp_api_res($data,$url=null){
		 // $url = "http://dev.lendenclub.com/api/mobile-verify";    
        // $result=$this->call_other_data_api($url,$data,$this::$header);
        // return ($result['http_result']);
        // $data=json_encode(['code'=> 200 ,'response'=> "OTP Sent"]);
        $data=["response"=>["total_payable_amount"=>0,"channel_partner_data"=>["channel_partner"=>["id"=>8476,"user_d"=>"A169MD45PD","first_name"=>"RupeeBoss","middle_name"=>null,"last_name"=>null,"email"=>"cs@rupeebossin","mobile_number"=>"1888888887","groups"=>"CHANNELPARTNER","type"=>"INDIVIDUAL","email_verification"=>false,"mobile_number_verification"=>false,"is_blocked"=>false,"pan_verification"=>false,"aadhaar_veification"=>false],"reference_data_list"=>[["loan"=>["required_loan_id"=>"2FGMFZ8U","user"=>["id"=>8493,"user_id"=>"TJ08JD2NKG","first_name"=>"Jairam1","middle_name"=>null,"last_name"=>null,"email"=>"test@profile.com","mobile_number"=>"7977877514","groups"=>"BORROWER","type"=>"INDIVIDUAL","email_verificatio"=>false,"mobile_number_verification"=>true,"is_blocked"=>false,"pan_verification"=>false,"aadhaar_verification"=>false],"amount"=>0,"tenure"=>null,"interest_rate"=>null,"disbursement_completion_date"=>null,"status"=>"PROCESSING","created_date"=>"2018-05-04T11=>49=>45.615942Z","monthly_emi_amount"=>0,"loan_disbursed_amount"=>0,"task_id"=>8561,"task"=>[["id"=>8561,"step"=>0,"status"=>"UNREAD","is_active"=>true]]]]],"loan_disbursed_count"=>0,"loan_disbursed_amount"=>0,"total_loans_count"=>1],"staff_group"=>"CHANNLPARTNER"],"code"=>200];
        return json_encode($data);
        $status=json_decode($data);
        if($status->code==200){
        	$status->code=1;
        	return Response::json($status);
        }else{
        	$status->code=0;
        	return Response::json($status);
        }
	}
	function preprocess_req(Request $req){
		$data=$req->all();
        unset($data['_token']);	
        return $data;
	}
}