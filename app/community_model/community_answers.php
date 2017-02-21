<?php

namespace App\community_model;

use Illuminate\Database\Eloquent\Model;

class community_answers extends Model
{
    protected $table='community_answer';
    protected $fillable = ['answers_id', 'question_id', 'answers','status'];
}
