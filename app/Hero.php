<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hero extends Model
{
    protected $fillable = ['nickname', 'real_name', 'superpowers', 'catch_phrase'];
}
