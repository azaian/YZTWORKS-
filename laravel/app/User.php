<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'active', 'admin','hash','accept_contract'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];


    public function isAdmin()
    {
        return $this->admin; // this looks for an admin column in your users table
    }

    public function isActive()
    {
        return $this->active; // this looks for an active column in your users table
    }  public function isAcceptContract()
    {
        return $this->accept_contract; // this looks for an active column in your users table
    }

    public function details()
    {
       return $this->hasOne('App\User_details');
    }
}
