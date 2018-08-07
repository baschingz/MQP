<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Queue extends Model
{
    //
    protected $fillable = array('queueNum', 'name', 'bed', 'start', 'end', 'userId');
}
