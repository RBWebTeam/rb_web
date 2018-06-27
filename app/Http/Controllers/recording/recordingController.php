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
     
 
define('UPLOAD_DIR',public_path('/rec/'));
//define('UPLOAD_DIR', $_SERVER['DOCUMENT_ROOT']."/rec/");


$extension="3gpp";
$file_name="video";
$img = $req['base64string'];
$img = str_replace("data:".$file_name."/".$extension.";base64,", '', $img);
$img = str_replace(' ', '+', $img);
$data = base64_decode($img);
$a= uniqid() . '.3gp';
$file = UPLOAD_DIR . $a;
$success = file_put_contents($file, $data);
$success ? $file : 'Unable to save the file.';



   if($req['user_id']!='' && $req['base64string']!=''){
       $query=DB::table('recording')->insertGetId(
        ['user_id' => $req['user_id'],'base64string'=>$req['base64string'],'extension'=>$extension
        ,'file_name'=>$file,'created_at'=> date("Y-m-d H:i:s"),'updated_at'=> date("Y-m-d H:i:s")]
        );



           if($query){
                return Response::json(array(
                            'Message' => "Successful",
                             'Status' => "Successful",
                              'StatusNo' => 0,
                        ));
          }else{
            return Response::json(array(
                            'Message' => "Failure",
                             'Status' => "failure",
                              'StatusNo' => 0,
                        ));
          }

         }else{
return Response::json(array(
                            'Message' => "Failure",
                             'Status' => "failure",
                              'StatusNo' => 0,
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
