<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Poling extends Model
{
    protected $table = "poling";
    protected $fillable = [
        "title",
        "description",
        'start_at',
        'stop_at'
    ];

    public function candidate()
    {
        return $this->hasMany(Candidate::class, 'poling_id', 'id');
    }
}
