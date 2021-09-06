<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Community extends Model
{
    protected $table = "community";
    protected $fillable = ['name', 'description', 'phone'];

    public function candidate(){
        return $this->belongsTo('App\Candidate');
    }

}

