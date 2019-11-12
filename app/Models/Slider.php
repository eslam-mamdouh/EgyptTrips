<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Brackets\Media\HasMedia\ProcessMediaTrait;
use Brackets\Media\HasMedia\AutoProcessMediaTrait;
use Brackets\Media\HasMedia\HasMediaCollectionsTrait;
use Spatie\MediaLibrary\HasMedia\HasMedia;
class Slider extends Model implements HasMedia 
{
    use ProcessMediaTrait;
    use AutoProcessMediaTrait;
    use HasMediaCollectionsTrait;


    protected $fillable = [
        'enabled',
    
    ];
    
    
    protected $dates = [
        'created_at',
        'updated_at',
    
    ];
    
    protected $appends = ['resource_url' , 'image'];


    public function registerMediaCollections() {
        $this->addMediaCollection('sliders')
             ->disk('sliders')
             ->accepts('image/*');
    }
    
    /* ************************ ACCESSOR ************************* */

    public function getResourceUrlAttribute()
    {
        return url('/admin/sliders/'.$this->getKey());
    }

    public function getImageAttribute()
    {
        return $this->getMedia('sliders')[0]->getUrl();
    }
}
