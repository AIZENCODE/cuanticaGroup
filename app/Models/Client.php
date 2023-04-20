<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Support\Facades\Storage;


class Client extends Model
{
    use HasFactory;


    protected $fillable = [
        'name',
        'description',
        'image_url',
        
    ];


    public function image(): Attribute
    {
        return new Attribute(
            get:function(){
                return $this->image_url ? Storage::url($this->image_url) : 'https://pngimg.com/uploads/ford/ford_PNG102954.png';
            }
        );
    }
}
