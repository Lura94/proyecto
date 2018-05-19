<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $table="students";
    protected $fillable=[
        'curp','email','name','grade','group','last_name','last_name2','ncontrol','password','specialty','imss','phoneTutor','tutor'
    ];
}
