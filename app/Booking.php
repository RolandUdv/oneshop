<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $table = 'bookings';
    // protected $table = 'users';
    // protected $table = 'services';
    // primary key
    public $primaryKey = 'booking_id';
    // timestamps
    public $timestamps = true; // no need for this

    public function users(){
        return $this->belongsTo(Users::class);
    }

}
