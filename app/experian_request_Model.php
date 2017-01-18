<?php

namespace App;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use DB;
class experian_request_model extends Model
{
    //
    protected $table='experian_request';
    protected $fillable = ['clientName', 'hitId', 'voucherCode', 'firstName', 'middleName', 'surName', 'dob', 'gender', 'flatPlotHouseNo', 'society', 'locality', 'city', 'state', 'pincode', 'mobileNo', 'telephoneNo', 'telephoneType', 'email', 'pan', 'passport', 'aadhaar', 'voterid', 'driverLicenseNo', 'rationcard', 'created_at', 'updated_at'];
    public function store(Request $request)
    {
        $table = new experian_request_model();
        $input = $request->all();
         $id = $table::create($input)->id;

         return $id;
    }
}