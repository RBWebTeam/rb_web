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
}