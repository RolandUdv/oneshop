<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Opentimes extends Model
{
    // table name
    protected $table = 'Opentimes';
    // primary key
    public $primaryKey = 'opentimes_id';
    //
    //public $review = 'category_name';
    // timestamps
    public $timestamps = true; // no need for this
}
