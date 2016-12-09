<?php

namespace App\recording;

use Illuminate\Database\Eloquent\Model;

class recordingModel extends Model
{
     protected $table='recording';
     protected $fillable=['user_id','base64string','extension','file_name'];

       
}
