<?php

namespace App\Models;

use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    protected $fillable=[
        'name',
        'slug',
        'content',
        'description',
        'image_url',
        'ico_url',
        'outstanding',
        'status',
    ];
    public function image(): Attribute
    {
        return new Attribute(
            get:function(){
                return $this->image_url ? Storage::url($this->image_url) : 'https://images.pexels.com/photos/3408744/pexels-photo-3408744.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1';
            }
        );
    }
    public function ico(): Attribute
    {
        return new Attribute(
            get:function(){
                return $this->ico_url ? Storage::url($this->ico_url) : 'https://cdn-icons-png.flaticon.com/512/1783/1783356.png';
            }
        );
    }

      // Route Model Binding

      public function getRouteKeyName(){
        return 'slug';
    }


}
