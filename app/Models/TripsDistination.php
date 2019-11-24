<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Brackets\Media\HasMedia\ProcessMediaTrait;
use Brackets\Media\HasMedia\AutoProcessMediaTrait;
use Brackets\Media\HasMedia\HasMediaCollectionsTrait;
use Spatie\MediaLibrary\HasMedia\HasMedia;

class TripsDistination extends Model implements HasMedia
{

    use ProcessMediaTrait;
    use AutoProcessMediaTrait;
    use HasMediaCollectionsTrait;


    protected $fillable = [
        'name',
        'slug',
    
    ];
    
    
    protected $dates = [
        'created_at',
        'updated_at',
    
    ];
    
    protected $appends = ['resource_url' , 'image'];

    public function trips()
    {
        return $this->hasMany('App\Trip', 'distination_id','id');
    }

    public function registerMediaCollections() {
        $this->addMediaCollection('distinations')
             ->disk('distinations')
             ->accepts('image/*');
    }

    /* ************************ ACCESSOR ************************* */

    public function getResourceUrlAttribute()
    {
        return url('/admin/trips-distinations/'.$this->getKey());
    }

    public function getImageAttribute()
    {
        $items = $this->getMedia('distinations');
        if($items){
            return $items[0]->getUrl();
        }
    }

    public function setSlugAttribute()
    {
        $this->attributes['slug'] = $this->name . "-". $this->id;
    }
}
