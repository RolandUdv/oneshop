<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Homepage extends Model
{
    // table name
    protected $table = 'homepage';
    // primary key
    public $primaryKey = 'homepage_id';
    //
    //public $review = 'category_name';
    // timestamps
    public $timestamps = true; // no need for this
}
