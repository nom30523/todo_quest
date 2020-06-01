<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
    protected $guarded = array('id');

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public static $rules = array(
        'body' => 'required'
    );
}
