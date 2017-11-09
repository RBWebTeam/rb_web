<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use App\Http\Requests;
use DB;
use App\SEOlibraries\Seo;
use Response;
class TeamController extends CallApiController
{
    public function team(){
      return view('team');
    }
 
    public function demo(){
    	$data['users'] = DB::table('demo')->select('id','audience_name', 'status', 'created_at', 'updated_at')->orderBy('id', 'DESC')
		->paginate(5);

		
      return view('demo')->with($data);

    }

    public function demo_submit(Request $req){
      $query=DB::table('demo')
		->insert(['audience_name'=>$req->audience_name,
			     'status'=>$req->status,
			     'comment'=>$req->comment,
			    'created_at'=>date("Y-m-d H:i:s"),
   			    'updated_at'=>date("Y-m-d H:i:s")]);

		if($query){
                return Response::json(array(
                            'data' => true,
                        ));
            }else{
                return Response::json(array(
                            'data' => false,
                        ));
            }
    }

    public function demo_delete(Request $req){
    	// print_r($req->all());
      
		$query=DB::table('demo')->where('id','=',$req->id )->delete();

		if($query){
                return Response::json(array(
                            'data' => true,
                        ));
            }else{
                return Response::json(array(
                            'data' => false,
                        ));
            }
    }

    public function demo_edit(Request $req){
    	 print_r($req->all());exit();
      
		$query=DB::table('demo')
            ->where('id', '=',$req->id)
            ->update(['audience_name' => $req->name]);

            print_r($query);exit();

		if($query){
                return Response::json(array(
                            'data' => true,
                        ));
            }else{
                return Response::json(array(
                            'data' => false,
                        ));
            }
    }
}
