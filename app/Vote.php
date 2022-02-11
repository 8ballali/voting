<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vote extends Model
{
    protected $table = "vote";
    protected $fillable = ['candidate_id', 'user_id', 'status',];
    public function candidate(){
    	return $this->belongsTo('App\Candidate');
    }
    public function user(){
    	return $this->belongsTo('App\User');
    }
}
