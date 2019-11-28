<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $fillable = [
        'name',
        'email',
        'country',
        'phone',
        'date',
        'trip',
        'adults',
        'children',
        'location',
    
    ];
    
    
    protected $dates = [
        'date',
        'created_at',
    
    ];
    
    protected $appends = ['resource_url'];

    /* ************************ ACCESSOR ************************* */

    public function getResourceUrlAttribute()
    {
        return url('/admin/bookings/'.$this->getKey());
    }
}
