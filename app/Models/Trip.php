<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Brackets\Media\HasMedia\ProcessMediaTrait;
use Brackets\Media\HasMedia\AutoProcessMediaTrait;
use Brackets\Media\HasMedia\HasMediaCollectionsTrait;
use Spatie\MediaLibrary\HasMedia\HasMedia;
use Brackets\Translatable\Traits\HasTranslations;

class Trip extends Model implements HasMedia
{
    use ProcessMediaTrait;
    use AutoProcessMediaTrait;
    use HasMediaCollectionsTrait;
    use HasTranslations;

    public $translatable = ['title' , 'description'];

    protected $fillable = [
        'title',
        'description',
        'price',
        'child_price',
        'distination_id',
        'slug'
    
    ];
    
    
    protected $dates = [
        'created_at',
        'updated_at',
    
    ];
    
    protected $appends = ['resource_url', 'image'];


    public function distination()
    {
        return $this->hasOne('App\Models\TripsDistination', 'id','distination_id');
    }

    public function rate(){
        return (int)($this->join('reviews','reviews.trip','=','trips.title')->avg('rate'));
    }

    public function registerMediaCollections() {
        $this->addMediaCollection('trips')
             ->disk('trips')
             ->accepts('image/*');
    }

    /* ************************ ACCESSOR ************************* */

    public function getResourceUrlAttribute()
    {
        return url('/admin/trips/'.$this->getKey());
    }

    public function getImageAttribute()
    {
        $items =$this->getMedia('trips');
        if($items){
            return $items[0]->getUrl();
        }
    }
}
