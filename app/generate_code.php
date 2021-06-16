<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class generate_code extends Model
{
    protected $table = "generate_code";

    protected $fillable = [
         'code', 'reg_id',
    ];
}
