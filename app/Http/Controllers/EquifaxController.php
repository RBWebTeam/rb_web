<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use DB;
use Mail;
use Session;
class EquifaxController extends CallApiController
{
	public function generate_pdf(Request $req){
		$command="java -Xms256m -Xmx512m -jar MParser-6.2.0.jar".$req['file'];
		$x=system($command);
		print_r($x);
	}
	
	public function equifax()
	{
		$inquiry=DB::select('select * from equifax_inquiry_purpose');
		$state=DB::select('select * from equifax_state_master');
		$phone=DB::select('select * from equifax_phone_type');
		//print "<pre>";
		//print_r($inquiry);
		//print_r($state);
		//print_r($phone);
		//exit();
		return view('equifax')->with(['inq'=>$inquiry,'state'=>$state,'phone'=>$phone]);
	}
}