<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class registrationModel extends Model
{

	
     protected $table='user_registration';
     protected $fillable = ['email', 'contact', 'password','id'];
     public $timestamps = false;
}
