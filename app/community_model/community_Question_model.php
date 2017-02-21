<?php

namespace App\community_model;

use Illuminate\Database\Eloquent\Model;

class community_Question_model extends Model
{
    protected $table='community_question';
    protected $fillable = ['que_id', 'title', 'description','tags','user_id','status'];
}
