<?php

namespace App\Http\Controllers\ERP;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
class MasterController extends Controller
{
    function getProductMaster()
    {
    	$data= DB::connection("ERP")->select("call usp_get_product_master");
    	return $data;
    }

    function getLeadStatusMaster()
    {
    	$data=DB::connection("ERP")->select("call usp_get_leadstatus_master");
    	return $data;
    }

    function getQuickLeadDetail()
    {
    	$data = DB::connection("ERP")->select("call USP_GetQuickLeadDetail");
    	return $data;
    }

}
