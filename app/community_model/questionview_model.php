<?php

namespace App\community_model;

use Illuminate\Database\Eloquent\Model;

class questionview_model extends Model
{
     protected $table='community_views';
    protected $fillable = ['view_id', 'question_id', 'views','create_date'];
}
