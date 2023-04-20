<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    use HasFactory;


    // Relacion uno a muchos inversa

    public function user(){
        return $this->belongsTo(User::class);
    }
    // Relacion uno a muchos inversa

    public function question(){
        return $this->belongsTo(Question::class);
    }


}
