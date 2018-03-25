<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    protected $table="reports";
    protected $fillable=[
        'description','id_student','name_teacher','reason','signed_hour'
    ];

    public function user()
    {
        return $this->belongsTo('App\User','id_student','id');
    }
}
