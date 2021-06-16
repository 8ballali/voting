<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Candidate extends Model
{
    protected $table = "candidate";
    protected $fillable = ['name','visi', 'misi', 'alamat', 'ttl', 'gender', 'user_phone', 'user_id', 'file', 'poling_id'];
}
