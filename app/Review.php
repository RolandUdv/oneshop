<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    // table name
    protected $table = 'reviews';
    // primary key
    public $primaryKey = 'review_id';
    //
    //public $review = 'category_name';
    // timestamps
    public $timestamps = true; // no need for this
}
