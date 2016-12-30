<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Response;
use App\Http\Requests;
use Session;
use Auth;
use DB;
use Redirect;
class FormController extends Controller
{
    function sidebar(Request $req){

        $input = $req->all();
        $post_data = array(
        'name'   => $req['name'],
        'contact'=> $req['contact']?$req['contact']:'',
        'email'    => $req['email']?$req['email']:'',
        'form'    =>$req['form'] 
        );

    //put curl code here to save in DB
    $url = "http://beta.erp.rupeeboss.com/CustomerWebRequest.aspx";
    //print "<pre>";
    // print_r($post_data);
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_VERBOSE, 1);
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_FAILONERROR, 0);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
    curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($post_data));
     
    $http_result = curl_exec($ch);
    $error = curl_error($ch);
    $http_code = curl_getinfo($ch ,CURLINFO_HTTP_CODE);
     //print_r($http_result);exit();
    curl_close($ch);
    if($http_result==1){
        return 'true';
    }else
        return 'false';
        //return 'true';
    }

    public function p_loan_submit(Request $req){
        //call api to submit form data
        $input = $req->all();
       //print_r($input);exit();
        $new_array = array('customer_contact' => Session::get('contact'), 'customer_name' => Session::get('name'),'customer_email' => Session::get('email'));
        //replacing city name with id
        if($req['city_name']){
            $city_id=DB::table('city_master')->select('city_id')
            ->where('city_name', 'LIKE', '%'.$req['city_name'].'%')
            ->get();
            $input['city_name']=(string)$city_id[0]->city_id;
            //adding city_id to post data
           
        } 
        $res=array_merge($input,$new_array);
       
        //$data =json_encode($res);
        //$data_1=str_replace('"','',$data);

       // print_r($res);exit();
        //CustomerLaravelWebRequest
            $url = "http://beta.erp.rupeeboss.com/CustomerLaravelWebRequest.aspx";
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_VERBOSE, 1);
            //curl_setopt( $ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));
            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_POST, 1);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            curl_setopt($ch, CURLOPT_FAILONERROR, 0);
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
            curl_setopt($ch, CURLOPT_POSTFIELDS,$res);
            $http_result = curl_exec($ch);
            $error = curl_error($ch);
            $http_code = curl_getinfo($ch ,CURLINFO_HTTP_CODE);
            //$obj = json_decode($http_result);
            //print "<pre>";
           //print_r($http_result);exit();
           // return $http_result;
            if($http_result==1){
                if(isset($req['income'])){
                    $income=$req['income'];
                }else{
                    $income=$req['turnover'];
                }
                
                $quote_data=DB::select('call  usp_get_personal_loan_quot ("'.$req['dob'].'","'.$req['emp_detail_id'].'","'.$income.'","'.$req['obligation'].'","'.$req['loan_tenure'].'","'.$req['loan_amount'].'")');
                //return Redirect::to('show-quotes')->with($quote_data);
                
            }
            else{
                $quote_data ="no result found";
                return "no quotes";
            }
            $data['product'] ="Personal Loan";
            $data['quote_data'] =$quote_data;
            //print"<pre>";
            return view('show-quotes')->with($data);
    }
    
     public function otp(Request $req){
        $input = $req->all();
        //print_r($input);exit(); 
        //sms curl to write here
        //$otp = mt_rand(100000, 999999);
        $otp=123456;
        //setting details to session to retrive at time of posting
        Session::put('contact', $req['contact']);
        Session::put('name', $req['name']);
        Session::put('email', $req['email']);
        $value = Session::get('contact');
        //ends 
        //insert into DB
        $query=DB::table('otp')->insertGetId(
        ['name' => $req['name'],'contact'=>$req['contact'],'email'=>$req['email']
        ,'source'=>'web_user','product'=>$req['product'],'otp'=>$otp,'status'=>'0','created_at'=> date("Y-m-d H:i:s")]
        );

        Session::put('login_id',$query);
        if($query){
            //calling service to send sms 
            $post_data='{"mobNo":"'.$req['contact'].'","msgData":"your otp is '.$otp.' - RupeeBoss.com",
                "source":"WEB"}';
            $url = "http://beta.services.rupeeboss.com/LoginDtls.svc/xmlservice/sendSMS";
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_VERBOSE, 1);
            curl_setopt( $ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));
            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_POST, 1);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            curl_setopt($ch, CURLOPT_FAILONERROR, 0);
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
            curl_setopt($ch, CURLOPT_POSTFIELDS,$post_data);
            $http_result = curl_exec($ch);
            $error = curl_error($ch);
            $http_code = curl_getinfo($ch ,CURLINFO_HTTP_CODE);
            $obj = json_decode($http_result);
            // statusId response 0 for success, 1 for failure
            curl_close($ch);
            if($obj->{'statusId'}==0){
                return Response::json(array(
                            'data' => true,
                        ));
            }else{
                return Response::json(array(
                            'data' => false,
                        ));
            }
        
        }else{
             return Response::json(array(
                            'data' => false,
                        ));
        }
    }
     public function otp_verify(Request $req){
        //print_r($req->all());
        //insert into DB
        //$c_date=date("Y-m-d H:i:s");
        $phone = Session::get('contact');
        $query=DB::table('otp')
            ->where('otp', $req['otp'])
            ->where('contact',$phone)
            ->update(['status' => 1]);
        if($query){

            //p_loan_submit();
             Session::put('user_id',Session::get('login_id'));
             Session::put('is_login',1);
             //print_r(Session::get('user_id'));
            return Response::json(array(
                            'data' => true,
                        ));
        }else{
            return Response::json(array(
                            'data' => false,
                        ));
        }
    }
    function show_quotes(Request $req){
        print_r($req->all());
       //return view('show-quotes')->with($req);
    }

}
