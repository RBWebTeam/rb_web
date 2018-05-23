<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use DB;
use Response;
use App\bank_quote_api_request;
use stdClass;
use Intervention\Image\Facades\Image as Image;
use App\Http\Controllers\LoanController;
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
	public function balance_transfer(Request $req){
		$getQuery=null;
		$savings=null;
		$resultArray=[];
		 try {
		 	$getQuery=DB::select('call usp_get_balance_transfer_quot("'.$req['loanamount'].'","'.$req['loaninterest'].'","'.$req['product_id'].'")');
                 if(sizeof($getQuery)==0)throw new \Exception("Error Processing Request", 1);
                
                $resultArray = json_decode(json_encode($getQuery), true);

     
                if (!empty($resultArray)) {
                $loanamount=$req['loanamount'];
                $loaninterest=$req['loaninterest']/12/100;
                $loanterm=$req['loanterm']*12;
                



                $amount = $loanamount * $loaninterest * (pow(1 + $loaninterest, $loanterm) / (pow(1 + $loaninterest, $loanterm) - 1));
                $total =(($amount*$loanterm)-$loanamount);

              
                //savings//
                if($getQuery[0]->roi==0){
                	$getQuery[0]->roi=1;
                 }
                $new_rate=($getQuery[0]->roi)/12/100;
                $new_amount = $loanamount * $new_rate * (pow(1 + $new_rate, $loanterm) / (pow(1 + $new_rate, $loanterm) - 1));

                $new_total =(($new_amount*$loanterm)-$loanamount);
                $new_ttl_payment = $loanamount+$new_total;
                $drop_emi= $amount-$new_amount;
                $drop_in_int=(($loaninterest*12*100)-($new_rate*12*100));
                $savings=$total-$new_total;
                $emiperlacs=($new_amount/100000);

                //rounding of the amounts
                $amount=round($amount,2);
                $new_amount=round($new_amount,2);
                $drop_emi=round($drop_emi,2);
                $drop_in_int=round($drop_in_int,2);
                $savings=round($savings,2);



                $savings= array('amount'=>$amount, 'new_amount'=>$new_amount, 'drop_emi'=>$drop_emi,'drop_in_int'=>$drop_in_int, 'savings'=>$savings, 'emiperlacs'=> $emiperlacs);                            
                 }

		                 $status=1;
		 } catch (\Exception $e) {
		 	//print_r($e->getMessage());exit();
		 	$status=0;
		 	$getQuery=null;
			$savings=null;	
		 }
                $data = array('status'=>$status,'data' =>$resultArray,"saving"=>$savings );
                return json_encode($data);
	}
public function balance_transfer_with_quoteid(Request $req){
		//try {
			//save and get quote id
		$save_req =new Request( ['status'=>'NA','LoanRequired' =>$req['loanamount'] , 'LoanTenure'=>$req['loaninterest'],'ProductId'=>$req['product_id'],'LoanTenure'=>$req['loanterm'],"ApplicantNme"=>$req['applicantname'],"Email"=>$req['email'],"Contact"=>$req['contact'],"BrokerId"=>$req['brokerid'],"api_source"=>$req['source']]);

		$save=new bank_quote_api_request();	
		$id=$save->store_bt_req($save_req);
		//get real quotes
		$quote=json_decode($this::balance_transfer($req));
		

		
		$data=$quote->data;
		$savings=$quote->saving;
		// print_r($savings);exit();
		if($data!=[]){
			foreach ($data as $key => $value){

			    $new_rate=$value->roi/12/100;
			    //print_r($new_rate);exit();
			    $loanamount=$req['loanamount'];
			    $loaninterest=$req['loaninterest']/12/100;
			    $loanterm=$req['loanterm']*12;
			    $amount = $loanamount * $loaninterest * (pow(1 + $loaninterest, $loanterm) / (pow(1 + $loaninterest, $loanterm) - 1));
			    $total =(($amount*$loanterm)-$loanamount);

			    $ttl_payment = $loanamount+$total;

			    $new_amount = $loanamount * $new_rate * (pow(1 + $new_rate, $loanterm) / (pow(1 + $new_rate, $loanterm) - 1));

			  $new_total =(($new_amount*$loanterm)-$loanamount);
			  $new_ttl_payment = $loanamount+$new_total;
			  $drop_emi= round($amount-$new_amount,2);
			  $drop_in_int=round((($loaninterest*12*100)-($new_rate*12*100)),2);
			  $savings=$total-$new_total;
			  $value->drop_emi=$drop_emi;
			  $value->drop_in_int=$drop_in_int;
			}
			$status_Id=0;
			$msg="data delievered";
			$new_data=$data;
			$savings=$quote->saving;
            $quote=$id;
			$url=$this::$erp_url_static."BalanceTransfer/PL_BT_Form.aspx";
		}
		else{
			$new_data=NULL;
			$status_Id=1;
			$msg="No record Found";
			$savings=NULL;
			$quote=NULL;
			$url=NULL;
		}
		
		//print_r($a);
         $result=json_decode(json_encode(['bank_data' =>$new_data,'savings'=>[$savings]]));
		$new_data=array('data' =>$result ,'msg' =>$msg,'status_Id'=>$status_Id,'quote_id'=>$quote,'url'=>$url );
		// } catch (\Exception $e) {
		// 	$new_data=NULL;
		// 	$status_Id=1;
		// 	$msg=$e->getMessage();
		// 	$quote=NULL;
		// 	$url=NULL;
		// 	$new_data=array('data' =>$new_data ,'msg' =>$msg,'status_Id'=>$status_Id,'quote_id'=>$quote,'url'=>$url );
		// }
		
		return $new_data;
			
	}

	public function balance_transfer_fm(Request $req){
       $getQuery=null;
		$savings=null;
		$resultArray=[];
		 try {
		 	$getQuery=DB::select('call usp_get_balance_transfer_quot("'.$req['loanamount'].'","'.$req['loaninterest'].'","'.$req['product_id'].'")');
                 if(sizeof($getQuery)==0)throw new \Exception("Error Processing Request", 1);
                
                $resultArray = json_decode(json_encode($getQuery), true);

     
                if (!empty($resultArray)) {
                $loanamount=$req['loanamount'];
                $loaninterest=$req['loaninterest']/12/100;
                $loanterm=$req['loanterm']*12;
                



                $amount = $loanamount * $loaninterest * (pow(1 + $loaninterest, $loanterm) / (pow(1 + $loaninterest, $loanterm) - 1));
                $total =(($amount*$loanterm)-$loanamount);

              
                //savings//
                if($getQuery[0]->roi==0){
                	$getQuery[0]->roi=1;
                 }
                $new_rate=($getQuery[0]->roi)/12/100;
                $new_amount = $loanamount * $new_rate * (pow(1 + $new_rate, $loanterm) / (pow(1 + $new_rate, $loanterm) - 1));

                $new_total =(($new_amount*$loanterm)-$loanamount);
                $new_ttl_payment = $loanamount+$new_total;
                $drop_emi= $amount-$new_amount;
                $drop_in_int=(($loaninterest*12*100)-($new_rate*12*100));
                $savings=$total-$new_total;
                $emiperlacs=($new_amount/100000);

                //rounding of the amounts
                $amount=round($amount,2);
                $new_amount=round($new_amount,2);
                $drop_emi=round($drop_emi,2);
                $drop_in_int=round($drop_in_int,2);
                $savings=round($savings,2);



                $savings= array('amount'=>$amount, 'new_amount'=>$new_amount, 'drop_emi'=>$drop_emi,'drop_in_int'=>$drop_in_int, 'savings'=>$savings, 'emiperlacs'=> $emiperlacs);                            
                 }

		                 $status_Id=1;
		 } catch (\Exception $e) {
		 	//print_r($e->getMessage());exit();

		 	$status_Id=0;
		 	$getQuery=null;
			$savings=null;	
		 }
                $data = array('msg'=>"Data delivered",'status_Id'=>$status_Id,'data' =>$resultArray,"saving"=>$savings );
               // print_r($data );exit();
                return json_encode($data);
	}

	public function kotak_pl_company_master(Request $req){
		
       	$kotak_company_list = DB::table('kotak_pl_company_master')->select('employername','final_category')->get();
        $kotak=json_encode($kotak_company_list);
		return $kotak;
    }

	public function kotak_pl_calc(Request $req){
		// print_r($req->all());exit();
        $loan=new LoanController();
		$calc=$loan->kotak_pl_proceed($req);
		$x = json_decode(json_encode($calc[0]), true);
		$LnAmt=$req->LnAmt*$calc[0]->non_csc_pf/100;
		//print_r();exit();
         	
        $arr=array_merge($x,array('LnAmt' =>$LnAmt));

		return $arr;
	}

	public function kotak_pl_city_list(Request $req){
        $query = DB::table('kotak_pl_city_master')->select('city_code','city_name')->get();
		$kotak_city_list=json_encode($query);
		return $kotak_city_list;
		
	}




	/*RBL Personal Loan*/
	public function rbl_pl_city_master(Request $req){
		$query = DB::table('rbl_pl_city_master')->select('code','city')->get();
		$rbl=json_encode($query);
		return $rbl;
	}

	public function rbl_pl_calc(Request $req){
		// print_r($req->all());exit();
		$loanamount=$req['LnAmt'];
		$tenure=$req['TnrMths'];
		// print_r($tenure);exit();
		$roi=13.99/12/100;

		$emi  = $loanamount * $roi * (pow(1 + $roi, $tenure) / (pow(1 + $roi, $tenure) - 1));
		$emi=round($emi);
		$fee =$loanamount*0.02;
		return response()->json(array('emi'=>$emi,'fee'=>$fee));
	}


	/*NRI*/
	public function nri(Request $req){
		try {
			$header = $req->header('key');
			// print_r($header);exit();
		if ($header=="NRI") {
			$getQuery=DB::select('call usp_get_nri_bank_quot("'.$req['loanamount'].'","'.$req['loantenure'].'","'.$req['income'].'","'.$req['obligations'].'","'.$req['gender'].'","'.$req['dob'].'","'.$req['emp_detail'].'")');
		return response()->json(array('status' =>0,'message'=>"success",'result'=>$getQuery));
		}else{
           return response()->json(array('status' =>1,'message'=>"Invalid Credentials",'result'=>''));
		}
		} catch (Exception $e) {
			return response()->json(array('status' => 1,'err'=>$e->getMessage()));
		}
		}

}
