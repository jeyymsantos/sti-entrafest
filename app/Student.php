<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = ['birthplace', 'status', 'nationality', 'religion', 'user_id', 'profile'];
}
