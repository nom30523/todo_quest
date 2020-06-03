<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function todos() {
        return $this->hasMany('App\Todo');
    }

    public function level() {
        return $this->hasOne('App\Level');
    }

    public static function userSearch($input, $select)
    {
        if ($input != '' && $select != '') {
            $items = User::whereHas('level', function($q) use ($select) {
                $q->where('level', $select);
            })->where('name', 'like', '%'.$input.'%')->paginate(9);
        } elseif ($input != '') {
            $items = User::with('level')->where('name', 'like', '%'.$input.'%')->paginate(9);
        } elseif ($select != '') {
            $items = User::whereHas('level', function($q) use ($select) {
                $q->where('level', $select);
            })->paginate(9);
        } else {
            $items = User::with('level')->paginate(9);
        }
        return $items;
    }
}
