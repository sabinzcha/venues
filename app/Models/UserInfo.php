<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserInfo extends Model {

    /**
     * Generated
     */

    protected $table = 'user_info';
    protected $fillable = ['id', 'user_id', 'first_name', 'last_name', 'date_of_birth', 'nationality_id', 'phone_no', 'mobile_no', 'country_id', 'province_id', 'zone_id', 'district_id', 'locality', 'profile_image', 'identity_image'];


    public function tblCountry() {
        return $this->belongsTo(\App\Models\TblCountry::class, 'country_id', 'id');
    }

    public function tblDistrict() {
        return $this->belongsTo(\App\Models\TblDistrict::class, 'district_id', 'id');
    }

    public function tblProvince() {
        return $this->belongsTo(\App\Models\TblProvince::class, 'province_id', 'id');
    }

    public function user() {
        return $this->belongsTo(\App\Models\User::class, 'user_id', 'id');
    }

    public function tblZone() {
        return $this->belongsTo(\App\Models\TblZone::class, 'zone_id', 'id');
    }


}
