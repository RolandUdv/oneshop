<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $table = 'bookings';
    // primary key
    public $primaryKey = 'booking_id';
    // timestamps
    public $timestamps = true; // no need for this
}
