<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    // table name
    protected $table = 'users';
    // primary key
    public $primaryKey = 'users_id';
    //
    //public $review = 'category_name';
    // timestamps
    public $timestamps = true; // no need for this
}
