<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class task extends Model
{
    protected $fillable = ['nickname', 'real_name', 'superpowers', 'catch_phrase'];
}
