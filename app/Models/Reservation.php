<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Reservation extends Model
{

    use SoftDeletes;
    protected $fillable = ['name', 'phone', 'email', 'page'];


    public static function getActiveReservationCount()
    {
        return self::count();
    }
}
