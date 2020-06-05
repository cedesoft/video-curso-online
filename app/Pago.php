<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pago extends Model
{
    //
    protected $fillable = ['amount','user_id','course_id'];
}
