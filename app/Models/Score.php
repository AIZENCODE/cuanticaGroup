<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Support\Facades\Storage;

class Score extends Model
{
    use HasFactory;


    protected $fillable=[
        'name',
        'calificacion',
        'titulo',
        'comment',
        'status',


        'image_url',

    ];


    public function image(): Attribute
    {
        return new Attribute(
            get:function(){
                return $this->image_url ? Storage::url($this->image_url) : 'https://images.pexels.com/photos/220453/pexels-photo-220453.jpeg';
            }
        );
    }

  

}
