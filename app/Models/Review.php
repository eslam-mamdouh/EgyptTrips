<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    protected $fillable = [
        'trip',
        'rate',
        'comment',
        'name',
        'country',
        'message',
    
    ];
    

    
    protected $dates = [
        'created_at',
        'updated_at',
    
    ];


    
    protected $appends = ['resource_url'];

    public function Trip()
    {
        return $this->hasOne('App\Trip', 'title','trip');
    }

    /* ************************ ACCESSOR ************************* */

    public function getResourceUrlAttribute()
    {
        return url('/admin/reviews/'.$this->getKey());
    }


    
}
