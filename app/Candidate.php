<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Candidate extends Model
{
    protected $table = "candidate";
    protected $fillable = ['name','visi', 'misi', 'alamat', 'tempatlahir', 'tanggallahir', 'gender', 'user_phone', 'community_id', 'file', 'poling_id', 'avatar', 'status'];

    public function community()
    {
        return $this->belongsTo(Community::class, 'community_id');
    }
    public function vote()
    {
        return $this->hasMany('App\Vote');
    }

}
