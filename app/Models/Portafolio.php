<?php

namespace App\Models;

use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Portafolio extends Model
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
                return $this->image_url ? Storage::url($this->image_url) : 'https://i.pinimg.com/564x/1b/f1/50/1bf1500483f7eb32a46e51a7b46ae173.jpg';
            }
        );
    }
}
