<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\image;
use App\Models\User;
class fav extends Model
{
    use HasFactory;

    public function image(){
        return $this->belongsTo(image::class);
    }

    public function User(){
        return $this->belongsTo(User::class);
    }
}
