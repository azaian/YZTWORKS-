<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User_details extends Model
{
    protected $table = 'user_details';
    protected $fillable = [
        'phone', 'website', 'business','project_requirement','city','user_id'
    ];
    public function user(){
       return $this->belongsTo('App/User')->get();
    }
}
