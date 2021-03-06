<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TblBooking extends Model {

    /**
     * Generated
     */

    protected $table = 'tbl_booking';
    protected $fillable = ['id', 'date', 'user_id', 'venue_id', 'no_of_person', 'total_amount'];


    public function user() {
        return $this->belongsTo(\App\Models\User::class, 'user_id', 'id');
    }

    public function venue() {
        return $this->belongsTo(\App\Models\Venue::class, 'venue_id', 'id');
    }

    public function tblBookingDetails() {
        return $this->hasMany(\App\Models\TblBookingDetail::class, 'booking_id', 'id');
    }


}
