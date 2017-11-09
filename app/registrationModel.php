<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class registrationModel extends Model
{

	
     protected $table='user_registration';
     protected $fillable = ['email', 'contact', 'password','id','username','provider_user_id','provider','created_at'];
     public $timestamps = false;

}
