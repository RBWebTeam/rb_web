<?php

namespace App\Http\Controllers\recording;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


use DB;
use Response;
use App\recording\recordingModel;

class recordingController extends Controller
{




     public function recording(Request $req){




define('UPLOAD_DIR', $_SERVER['DOCUMENT_ROOT']."/rec/");
$img = $req['base64string'];
$img = str_replace("data:".$req['file_name']."/".$req['extension'].";base64,", '', $img);
$img = str_replace(' ', '+', $img);
$data = base64_decode($img);
$a= uniqid() . '.3gp';
$file = UPLOAD_DIR . $a;
$success = file_put_contents($file, $data);
print $success ? $file : 'Unable to save the file.';




  	  //return $req->all();


     	  $query=DB::table('recording')->insertGetId(
        ['user_id' => $req['user_id'],'base64string'=>$a,'extension'=>$req['extension']
        ,'file_name'=>$req['file_name'],'created_at'=> date("Y-m-d H:i:s"),'updated_at'=> date("Y-m-d H:i:s")]
        );
     	  if($query){
     	  		return Response::json(array(
                            'data' => true,
                        ));
     	  }else{
     	  	return Response::json(array(
                            'data' => false,
                        ));
     	  }


     	 //return view('recording/recording');
     	 // 4nIX34mQNxvSFXBu3Y8sKg5r6l4tkvjLZIwM2EFn

     }


     public function show(Request $req){

            $query=recordingModel::all();

           
           
        return view('recording/show',['query'=>$query]);


     }
}
