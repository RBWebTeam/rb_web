<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class experian_responseModel extends Model
{

	
     protected $table='experian_response';
    protected $fillable = ['id', 'name', 'pan', 'email', 'lead_id', 'credit_score','raw_response','created_at', 'updated_at'];
    public function store(Request $request)
    {
        $table = new experian_responseModel();
        $input = $request->all();
         $id = $table::create($input)->id;

         return $id;
    }

}
