<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Support\Facades\Storage;

class Post extends Model
{
    use HasFactory;


    protected $fillable = [
        'title',
        'slug',
        'content',
        'summary',
        'image_url',
        'is_published',
        'category_id',
        'outstanding',
        'user_id',
        'published_at',
    ];

    protected $casts = [
        'is_published' =>'boolean',
        'published_at' =>'datetime',
    ];

    public function image(): Attribute
    {
        return new Attribute(
            get:function(){
                return $this->image_url ? Storage::url($this->image_url) : 'https://images.pexels.com/photos/3408744/pexels-photo-3408744.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1';
            }
        );
    }

    // Relacion uno a muchos inversa
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    // Relacion uno a muchos inversa
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    // Relacion muchos a muchos

    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }

    // Route Model Binding

    public function getRouteKeyName(){
        return 'slug';
    }

}
