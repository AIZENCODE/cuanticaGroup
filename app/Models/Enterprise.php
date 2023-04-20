<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Support\Facades\Storage;

class Enterprise extends Model
{
    use HasFactory;


    protected $fillable = [
        'name',
        'razon_social',
        'description',
        'direccion',
        'correo',
        'quienes_somos',
        'mision',
        'valores',
        'proposito',
        'telefono_uno',
        'telefono_dos',
        'whatsapp',
        'facebook',
        'linkedin',
        'instagram',
        'twitter',
        'youtube',

        'image_url',
        
    ];

    // Relacion uno a muchos polimorfica

    public function images(){
        return $this->morphMany('App\Models\Banner','imageable');
    }

    // Imagen
    public function image(): Attribute
    {
        return new Attribute(
            get:function(){
                return $this->image_url ? Storage::url($this->image_url) : 'https://cdn-icons-png.flaticon.com/512/4507/4507860.png';
            }
        );
    }

}
