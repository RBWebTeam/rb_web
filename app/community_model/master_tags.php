<?php

namespace App\community_model;

use Illuminate\Database\Eloquent\Model;

class master_tags extends Model
{
     protected $table='master_tags';
     protected $fillable = ['id', 'categories', 'status'];
        public $timestamps = false;
}
