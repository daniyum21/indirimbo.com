<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    protected $table = 'Users';
    protected $primaryKey = 'UserID';
    protected $Password,$Email;

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    public function setPasswordAttribute($pass){
        $this->attributes['password'] = $pass;

    }
    public static $rules = array(
        'username' => 'required',
        'password' => 'required'
    );

    public function getAuthIdentifier() {
        return $this->attributes['UserID'];
    }

    public function getAuthPassword() {
        return $this->attributes['Password'];
    }


    public function getReminderEmail() {
        return $this->Email;
    }

    public static function validate($data) {
        return Validator::make($data,static::$rules);
    }
    public function Role()
    {
        return $this->hasOne('App\Role','RoleID','RoleID');
    }
    public function isAdmin()
    {
        if($this->Role()->first()->RoleName=='Administrator')
            return true;
                    return false;
    }
    public function getRouteKeyName()
    {
        return 'UUID';
    }

}
