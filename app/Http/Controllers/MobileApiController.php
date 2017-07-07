<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use DB;
use Response;
use App\bank_quote_api_request;
use stdClass;
use Intervention\Image\Facades\Image as Image;
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
				$url=$this::$erp_url_static."LAP/LAP_Form.aspx";
			}else{
				$url=$this::$erp_url_static."homeloan/home_loan_application_form.aspx";
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
			$url=$this::$erp_url_static."personalloan/personalloan.aspx";
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
	public function user_profile_picture(Request $req){

		try{
		     	$data = $req;
		     	$user_id=$data['user_id'];
		        $base64_str = substr($data->base64_image, strpos($data->base64_image, ",")+1);
		        $image = base64_decode($base64_str);
		        $png_url = $user_id.".png";
		        $path = public_path() . "/Upload/" . $png_url;

		        \Image::make($image)->save($path);
		        $response = array(
		            'status' => 'success',
		            'url'=>"www.rupeeboss.com/upload/".$user_id.".png"
		        );
		    }catch(Exception $ee){
		    	return $ee->getMessage();
		    }
        return Response::json( $response  );
	}

	public function revise_calculation(Request $req){
		$status=0;
		$err="";
		$data=null;
		try{
				$loanamount=$req['loanamount'];
		        $loaninterest=$req['loaninterest']/12/100;
		        $loanterm=$req['loanterm']*12;
		        $old_loaninterest=$req['old_loaninterest']/12/100;
		
		        $emi = $loanamount * $loaninterest * (pow(1 + $loaninterest, $loanterm) / (pow(1 + $loaninterest, $loanterm) - 1));
		
		        $old_emi = $loanamount * $old_loaninterest * (pow(1 + $old_loaninterest, $loanterm) / (pow(1 + $old_loaninterest, $loanterm) - 1));
		
		        $old_total=(($old_emi*$loanterm)-$loanamount);
		
		        $total_payable_interest=(($emi*$loanterm)-$loanamount);
		
		        $after_savings=$old_total- $total_payable_interest;
		
		        $per_lacs=100000 * $loaninterest * (pow(1 + $loaninterest, $loanterm) / (pow(1 + $loaninterest, $loanterm) - 1));
		
		  
		
		         $drop_emi_new=$old_emi-$emi;
		
		         $drop_in_int_new=(($old_loaninterest*12*100)-($loaninterest*12*100));
		          //print_r($drop_in_int_new);exit();
		         $data['emi']=round($emi,2);
		         $data['after_savings']=round($after_savings,2);
		         $data['loaninterest']=round($loaninterest*12*100,2);
		         $data['drop_emi_new']=round($drop_emi_new,2);
		         $data['drop_in_int_new']=round($drop_in_int_new,2);
		         
		         $status=1;
		     }catch(\Exception $ee){
		     	$err=$ee->getMessage();
		     }

        return response()->json(array('success' => $status,'data'=>$data,'err'=>$err));
     

	}

}
