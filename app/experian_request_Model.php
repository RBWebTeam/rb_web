<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class experian_request extends Model
{

	
     protected $table='experian_request';
     protected $fillable = [`id`, `clientName`, `hitId`, `voucherCode`, `firstName`, `middleName`, `surName`, `dob`, `gender`, `flatPlotHouseNo`, `society`, `locality`, `city`, `state`, `pincode`, `mobileNo`, `telephoneNo`, `telephoneType`, `email`, `pan`, `passport`, `aadhaar`, `voterid`, `driverLicenseNo`, `rationcard`, `created_at`, `updated_at`];
     // public $timestamps = false;
     public function store(Request $request)
    {
        $table = new experian_request();
        $input = $request->all();
   		$id = $table::create($input)->id;

   		return $id;
    }

}
