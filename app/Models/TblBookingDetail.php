<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TblBookingDetail extends Model {

    /**
     * Generated
     */

    protected $table = 'tbl_booking_details';
    protected $fillable = ['item_id', 'rate', 'quantity', 'amount', 'booking_id'];


    public function tblBooking() {
        return $this->belongsTo(\App\Models\TblBooking::class, 'booking_id', 'id');
    }


}
