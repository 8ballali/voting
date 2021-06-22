<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vote extends Model
{
    protected $table = "Vote";
    protected $fillable = [
        'candidate_id', 'user_id', 'status',
    ];
}
