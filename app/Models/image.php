<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\fav;
use App\Models\comment;

class image extends Model
{
    use HasFactory;

    public function User(){
        return $this->belongsTo(User::class);
    }

    public function comment(){
        return $this->hasMany(comment::class);
    }

    public function fav(){
        return $this->hasMany(fav::class);
    }
}
