<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    // table name
    protected $table = 'services';
    // primary key
    public $primaryKey = 'service_id';
    //
    //public $service = 'service_name';
    // timestamps
    public $timestamps = true; // no need for this
}
