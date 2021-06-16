<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class poling extends Model
{
    protected $table = "poling";
    protected $fillable = [
        "title",
        "description",
        'start_at',
        'stop_at'
    ];
}
