<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sponsor extends Model
{
    protected $table = "sponsor";
    protected $fillable = [
        "file",
        "description"
    ];
}
