<?php

namespace App\Guodian;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    //
    protected $guarded = ['created_at'];
    public $timestamps = false;

}
