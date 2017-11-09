<?php

namespace App\community_model;

use Illuminate\Database\Eloquent\Model;

class comment_model extends Model
{
     protected $table='community_comment';
     protected $fillable = ['comment_id', 'answers_id', 'comment','status'];
     public $timestamps = false;

}
