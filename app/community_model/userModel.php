<?php

namespace App\community_model;

use Illuminate\Database\Eloquent\Model;

class userModel extends Model
{
    protected $table='community_users';
    protected $fillable = ['name', 'email', 'password'];
}
