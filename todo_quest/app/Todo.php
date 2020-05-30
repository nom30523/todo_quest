<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
    public static $rules = array(
        'body' => 'required'
    )
}
