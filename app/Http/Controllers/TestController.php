<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use DB;
use Response;
use File;
class TestController extends CallApiController{
	public function test(){
		echo "hiiiii";
		$arg='{
			"InquiryResponseHeader":
			 {
			"CustomerCode": "IC01",
			"CustomerName": null,
			"ClientID": "027BB02400",
			"CustRefField": "417476",
			"ReportOrderNO": "21276248",
			"ProductCode": "IDCR",
			"ProductVersion": null,
			"SuccessCode": "1",
			"MatchType": null,
			"Date": "03-10-2017",
			"Time": "12:42:32",
			"HitCode": "11"
			}
		}';
		$xml_doc="./jar/equifax-xml-response.xml";
		$xml = File::get($xml_doc);
		//echo exec(" ulimit -a");
		//print_r(system("sudo java -jar ./jar/MParser.jar com.creditReport.pojo.InputParmeterDTO ".$arg));
		system("java -jar ./jar/MParser.jar com.creditReport.pojo.Controller.generateIstsHtml html ".$arg." ", $outputArray);
		print_r($outputArray);

	}
}