<?php

namespace App\Models;

use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Approach extends Model
{
    use HasFactory;


    protected $fillable=[
        'name',
        'color',
        'description',
        'image_url',
     
    ];

    public function image(): Attribute
    {
        return new Attribute(
            get:function(){
                return $this->image_url ? Storage::url($this->image_url) : 'https://cdn-icons-png.flaticon.com/512/1356/1356479.png';
            }
        );
    }
}
