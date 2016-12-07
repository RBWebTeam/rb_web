<?php

namespace App\Http\Controllers\recording;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use DB;
use Response;
class recordingController extends Controller
{
     public function recording(Request $req){

     	//  return    $request->all();
     	  $query=DB::table('recording')->insertGetId(
        ['user_id' => $req['user_id'],'base64string'=>$req['base64string'],'extension'=>$req['extension']
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
     	 // return view('recording/recording');

     }
}
