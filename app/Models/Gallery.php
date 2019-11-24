<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Brackets\Media\HasMedia\ProcessMediaTrait;
use Brackets\Media\HasMedia\AutoProcessMediaTrait;
use Brackets\Media\HasMedia\HasMediaCollectionsTrait;
use Spatie\MediaLibrary\HasMedia\HasMedia;

class Gallery extends Model implements HasMedia
{
    use ProcessMediaTrait;
    use AutoProcessMediaTrait;
    use HasMediaCollectionsTrait;

    protected $fillable = [
        'slug',
        'distination_id',
    
    ];
    
    
    protected $dates = [
        'created_at',
        'updated_at',
    
    ];
    
    protected $appends = ['resource_url','image'];


    public function distination()
    {
        return $this->hasOne('App\Models\TripsDistination', 'id','distination_id');
    }

    public function registerMediaCollections() {
        $this->addMediaCollection('galleries')
             ->disk('galleries')
             ->accepts('image/*');
    }

    /* ************************ ACCESSOR ************************* */

    public function getResourceUrlAttribute()
    {
        return url('/admin/galleries/'.$this->getKey());
    }

        public function getImageAttribute()
    {
        $items = $this->getMedia('galleries');
        if($items){
            return $items[0]->getUrl();
        }
    }
}
