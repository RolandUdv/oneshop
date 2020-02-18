<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
    // table name
    protected $table = 'staff';
    // primary key
    public $primaryKey = 'staff_id';
    //
    //public $category = 'category_name';
    // timestamps
    public $timestamps = true; // no need for this
}
