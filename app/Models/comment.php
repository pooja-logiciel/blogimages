<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\image;

class comment extends Model
{
    use HasFactory;


    public function image(){
       return $this->belongsTo(image::class);
    }

       public function user(){
       return $this->belongsTo(User::class);
    }
}
